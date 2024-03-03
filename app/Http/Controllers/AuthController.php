<?php

namespace App\Http\Controllers;

use App\Models\Role;
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
            if(auth()->user()->roles->first()->name == 'Administrateur'){
                return redirect('/admin');
            }
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role_id'=>'required|in:2,3'
        ]);
        $user = User::create($request->all());
        if($user){
            $roleId = $request->input('role_id');
            $permssionId = Role::where('id',$roleId)->with('permissions')->first()->permissions->pluck('id')->toArray();
            foreach($permssionId as $id){
                $user->permissions()->attach($id);
            }
            $user->roles()->attach($roleId);
            return redirect('/login');
        }
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
