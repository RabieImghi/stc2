<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('user.signIn');
    }
    public function Register(){
        return view('user.signUp');
    }
    public function ResetPassword(){
        return view('user.resetPassword');
    }
    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt($request->only('email', 'password'))){
            return redirect('/Events');
        }
    }
    // public function store(Request $request){
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);
    //     User::create($request->all());
    // }
}
