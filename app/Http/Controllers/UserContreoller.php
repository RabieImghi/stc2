<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Permission;
use App\Models\User;
use App\Models\Role;
use App\Models\Ticket;
use App\Models\Category;
use Illuminate\Http\Request;

class UserContreoller extends Controller
{
    public function index(){
        $statistique = [
            'users' => User::count(),
            'categories' => Category::count(),
            'Ticket' => Ticket::count(),
            'Event'=> Event::count()
        ];
        $lastEvent = Event::with('user')->orderBy('id', 'desc')->take(5)->get();
        return view('admin.index',compact('statistique', 'lastEvent'));
    }
    public function error(){
        return view('user.eror404');
    }
    public function permissionUser(){
        $users = User::with('permissions')->with('roles')->paginate(2);
        $permissions = Permission::all();
        return view('admin.permissionUser', compact('users', 'permissions'));
    }
    public function PermissionRole(){
        $roles = Role::with('permissions')->paginate(2);
        $permissions = Permission::all();
        return view('admin.permissionRole', compact('roles', 'permissions'));
    }
    public function GestionUsers(){
        $roles = Role::all();
        $users = User::with('roles')->paginate(3);
        return view('admin.GestionUsers', compact('users','roles'));
    }
    public function deleteUser(Request $request){
        $request->validate([
            'user_id'=>'required',
        ]);
        $userId = $request->user_id;
        $user = User::find($userId);
        $user->delete();
        return redirect('/GestionUsers');
    }
    public function updateRoleUser(Request $request){
        $request->validate([
            'role_id'=>'required',
            'user_idd'=>'required'
        ]);
        $userId = $request->user_idd;
        $user = User::find($userId);
        $user->permissions()->detach();
        $permssionId = Role::where('id',$request->role_id)->with('permissions')->first()->permissions->pluck('id')->toArray();
        foreach($permssionId as $id){
            $user->permissions()->attach($id);
        }
        $user->roles()->sync($request->role_id);
        return redirect('/GestionUsers');
    }
    public function BaneUser($id){
        $user = User::find($id);
        if($user->isBane == 'baned'){
            $user->isBane = 'nonBaned';
        }else{
            $user->isBane = 'baned';
        }
        $user->save();
        return redirect('/GestionUsers');
    }
}
