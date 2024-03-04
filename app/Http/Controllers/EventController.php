<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
use App\Models\Ticket;

class EventController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function events(){
        $events = Event::where('isPublish', 'publish')->with('user')->paginate(6);
        return view('user.events', compact('events'));
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
            'acceptType'=> 'required|in:auto,man',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->adresse = $request->adresse;
        $event->placeNumber = $request->placeNumber;
        $event->category_id = $request->category_id;
        $event->image = $imageName;
        $event->user_id = auth()->user()->id;
        $event->acceptType = $request->acceptType;
        $event->isPublish = 'NonPublish';
        $event->save();
        return redirect('/Events');
    }
    public function GestionEvents(){
        $events = Event::where('isPublish','NonPublish')->with('category')->with('user')->get();
        return view('admin.gestionEvents', compact('events'));
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
        if($events->placeNumber > 0){
            if(Ticket::where('user_id', auth()->user()->id)->count() == 0){
                if($events->acceptType == 'auto'){
                    $events->placeNumber = $events->placeNumber - 1;
                    $events->save();
                    Ticket::create([
                        'user_id' => auth()->user()->id,
                        'event_id' => $id,
                        'isAccept' => '1'
                    ]);
                    session()->flash('success', 'You have successfully reserved a ticket for this event');
                    
                    return redirect('/EventsDetails/'.$id);
                }else{
                    $events->placeNumber = $events->placeNumber - 1;
                    $events->save();
                    Ticket::create([
                        'user_id' => auth()->user()->id,
                        'event_id' => $id,
                        'isAccept' => '0'
                    ]);
                    
                    session()->flash('success', 'Your request has been sent to the event owner');
                    return redirect('/EventsDetails/'.$id);
                }
            }else{
                session()->flash('error', 'You have already reserved a ticket for this event');
                return redirect('/EventsDetails/'.$id);
            }
        }else{
            session()->flash('error', 'You have already reserved a ticket for this event');
            return redirect('/EventsDetails/'.$id);
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
        $event = Event::find($ticket->event_id);
        if($action[1] == 'accept'){
            $ticket->isAccept = '1';
            $ticket->save();
        }else{
            $event->placeNumber = $event->placeNumber + 1;
            $event->save();
            $ticket->delete();
        }
        return redirect('/MyEventReservation/'.auth()->user()->id);
    }
    
}
