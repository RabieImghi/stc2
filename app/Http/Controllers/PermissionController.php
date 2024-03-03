<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function addPermissionUser(Request $request){
        $request->validate([
            'user_id'=>'required',
            'permisssion_id'=>'required',
        ]);
        
    }
}
