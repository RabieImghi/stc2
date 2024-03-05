<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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
}
