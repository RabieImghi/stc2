<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;

class TicketController extends Controller
{
    
    public function searchEvent($value){
        if($value == "allEvent"){
            $events = Event::where('isPublish', 'publish')->with('user')->paginate(6);
        }else{
            $events = Event::where('isPublish', 'publish')->where('title', 'like', '%'.$value.'%')->with('user')->paginate(6);
        }
        return view('user.eventsSerch', compact('events'));
    }
    public function searchEventcategory($id){
        $events = Event::where('isPublish', 'publish')->where('category_id', $id)->with('user')->paginate(6);
        return view('user.eventsSerch', compact('events'));
    }
    public function DisplayMyEvent(){
        $events = Event::where('user_id', auth()->user()->id)->with('user')->paginate(6);
        return view('user.DisplayMyEvents', compact('events'));
    }
    public function updateMyEvent($id)
    {
        $categories = Category::all();
        $event = Event::find($id);
        return view('user.updateEvent', compact('event' , 'categories'));
    }
    public function updateEvent(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'adresse'=> 'required',
            'placeNumber'=> 'required',
            'price'=> 'required',
            'acceptType'=> 'required|in:auto,man',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $event = Event::find($request->id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->adresse = $request->adresse;
        $event->placeNumber = $request->placeNumber;
        $event->price = $request->price;
        $event->category_id = $request->category_id;
        $event->acceptType = $request->acceptType;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $oldImagePath = $destinationPath.'/'.$event->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            $image->move($destinationPath, $name);
            $event->image = $name;
        }
        $event->save();
        return redirect('/DisplayMyEvent');
    }
    public function deletMyEvent($id){
        $event = Event::find($id);
        $destinationPath = public_path('/images');
        $oldImagePath = $destinationPath.'/'.$event->image;
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
        $event->delete();
        return redirect('/DisplayMyEvent');
    }
}
