<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
use App\Models\Ticket;
use Dompdf\Dompdf;
use Spatie\Browsershot\Browsershot;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class EventController extends Controller
{
    public function index(){
        $lastEvents = Event::where('isPublish', 'publish')->with('user')->orderBy('id', 'desc')->limit(4)->get();
        return view('user.index', compact('lastEvents'));
    }
    public function events(){
        $categories = Category::all();
        $events = Event::where('isPublish', 'publish')->with('user')->orderBy('id', 'desc')->paginate(5);
        return view('user.events', compact('events', 'categories'));
    }
    public function eventsDetail($id){
        $event = Event::where('id', $id)->with('user')->with('category')->first();
        return view('user.eventsDetails', compact('event'));
    }
    public function addEventView(){
        $categories = Category::all();
        return view('user.addEvent' , compact('categories'));
    }
    public function AddNewEvent(Request $request){
     
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'adresse'=> 'required',
            'placeNumber'=> 'required',
            'price'=> 'required',
            'acceptType'=> 'required|in:auto,man',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        if($request->date < date('Y-m-d')){
            session()->flash('error', 'The date must be greater than the current date');
            return redirect('/AddEvent');
        }
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->adresse = $request->adresse;
        $event->placeNumber = $request->placeNumber;
        $event->price = $request->price;
        $event->category_id = $request->category_id;
        $event->image = $imageName;
        $event->user_id = auth()->user()->id;
        $event->acceptType = $request->acceptType;
        $event->isPublish = 'NonPublish';
        $event->save();
        return redirect('/Events');
    }
    public function GestionEvents(){
        $events = Event::where('isPublish','NonPublish')->with('category')->with('user')->paginate(4);
        return view('admin.gestionEvents', compact('events'));
    }
    public static function downloadTicket($id){
        $dompdf = new Dompdf();
        $event = Ticket::where('id',$id)->with('event')->with('user')->first();
        $html = view('ticket', ['event' => $event])->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A6','landscape');
        $dompdf->render();
        return Response::make($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="ticket.pdf"',
        ]);

    }
    public function RefuseAccepEvent($action){
        $action = explode('-', $action);
        $event = Event::find($action[0]);
        if($action[1] == 'accept'){
            $event->isPublish = 'publish';
            $event->save();
        }else{
            $imageName = $event->image;
            $path = public_path('images').'/'.$imageName;
            if(file_exists($path)){
                unlink($path);
            }
            $event->delete();
        }
        
        return redirect('/GestionEvents');
    }
    public function ReserveTickete($id){
        $events = Event::find($id);
        $price = $events->price*100;
        if($events->date < date('Y-m-d')){
            session()->flash('error', 'The date of the event has already passed');
            return redirect('/EventsDetails/'.$id);
        }
        if($events->placeNumber > 0){
            if($events->acceptType=='auto'){
                    if(Ticket::where('user_id', auth()->user()->id)->where('event_id',$id)->count() == 0){
                        Stripe::setApiKey('sk_test_51OgSVgE3Uo0XLWPtmjKABCTBt1OLGUKhViAW2WgEIEuYffBIpumE78nGP0kk1wDiDMJUckfL7PMRpTycyl7DYM9f00nhKSBVZE');
                        $checkout_session = Session::create([
                            'line_items' => [[
                                'price_data' => [
                                'currency' => 'usd',
                                'product_data' => [
                                    'name' => 'T-shirt',
                                ],
                                'unit_amount' => $price,
                                ],
                                'quantity' => 1,
                            ]],
                            'mode' => 'payment',
                            'success_url' => 'http://35.172.160.168/Payment/success/'.$id,
                            'cancel_url' => 'http://35.172.160.168/Payment/error/'.$id,
                            // 'success_url' => 'http://127.0.0.1:8000/Payment/success/'.$id,
                            // 'cancel_url' => 'http://127.0.0.1:8000/Payment/error/'.$id,
                        ]);
                        return Redirect::away($checkout_session->url);
                    }else{
                        session()->flash('error', 'You have already reserved a ticket for this event');
                        return redirect('/EventsDetails/'.$id);
                    } 
                
            }else{
                Ticket::create([
                    'user_id' => auth()->user()->id,
                    'event_id' => $id,
                    'isAccept' => '0',
                    'status'=>'nonpaye'
                ]);
                session()->flash('success', 'Your request has been sent to the event owner');
                return redirect('/EventsDetails/'.$id);
            }
        }else{
            session()->flash('error', 'There are no more places available for this event');
            return redirect('/EventsDetails/'.$id);
        }
    }
    public function Reservation($action,$id){
        if($action=="success"){
            $events = Event::find($id);
            $events->placeNumber = $events->placeNumber - 1;
            $events->save();
            $ticket = Ticket::create([
                'user_id' => auth()->user()->id,
                'event_id' => $id,
                'isAccept' => '1',
                'status'=>'paye'
            ]);
            $mailData = [
                'title' => 'MailFrom Evento',
                'body' => 'Felicitation',
                'Code'=>'Felicitation You have successfully reserved a ticket for event : '.$events->title,
            ];
            Mail::to(auth()->user()->email)->queue(new SendMail($mailData));
            session()->flash('success', 'You have successfully reserved a ticket for this event');
            return redirect('/EventsDetails/'.$id);           
        }else if($action=="successTicket"){
            $ticket = Ticket::find($id);
            $ticket->status = 'paye';
            $ticket->save();
            $event = Event::where('id',$ticket->event_id)->first();
            $event->placeNumber = $event->placeNumber - 1;
            $event->save();
            $mailData = [
                'title' => 'MailFrom Evento',
                'body' => 'Felicitation',
                'Code'=>'Felicitation You have successfully reserved a ticket for event : '.$ticket->event->title,
            ];
            Mail::to(auth()->user()->email)->queue(new SendMail($mailData));
            session()->flash('success', 'You have successfully reserved a ticket for this event');
            return redirect('/EventsDetails/'.$ticket->event_id);  
        }
    }
    public function MyEventReservation($id){
        $events = Ticket::with('event')->whereHas('event', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->where('isAccept','0')->get();
        return view('user.myEventReservation', compact('events'));
    }
    public function AcceptReservation($action){
        $action = explode('-', $action);
        $ticket = Ticket::find($action[0]);
        $event = Event::where('id',$ticket->event_id)->with('user')->first();
        if($action[1] == 'accept'){
            $mailData = [
                'title' => 'MailFrom Evento',
                'body' => 'Felicitation',
                'Code'=>'Felicitation You have successfully reserved a ticket for event : '.$event->title,
            ];
            Mail::to($event->user->email)->queue(new SendMail($mailData));
            $ticket->isAccept = '1';
            $ticket->save();
        }else{
            $event->placeNumber = $event->placeNumber + 1;
            $event->save();
            $ticket->delete();
        }
        return redirect('/MyEventReservation/'.auth()->user()->id);
    }
    public function myOrder(){
        $tickets = Ticket::where('user_id', auth()->user()->id)->with('event')->with('user')->get();
        return view('user.myOrder',compact('tickets'));
    }
    public function ticketDetail($id){
        $ticket = Ticket::where('id',$id)->with('event')->first();
        return view('user.ticketDetail',compact('ticket'));
    }
    public function download($id){
        return EventController::downloadTicket($id);
    }

}
