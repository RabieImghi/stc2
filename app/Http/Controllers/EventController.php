<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
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
    
}
