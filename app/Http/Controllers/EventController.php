<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
