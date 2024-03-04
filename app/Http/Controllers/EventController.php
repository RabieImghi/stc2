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
        return view('user.events');
    }
    public function eventsDetail(){
        return view('user.eventsDetails');
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
        $event->acceptType = 'auto';
        $event->isPublish = 'NonPublish';
        $event->save();
        return redirect('/Events');
    }
    
}
