<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserContreoller extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function error(){
        return view('user.eror404');
    }
    public function permissionUser(){
        $users = User::with('permissions')->with('roles')->get();
        $permissions = Permission::all();
        return view('admin.permissionUser', compact('users', 'permissions'));
    }
    public function PermissionRole(){
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        return view('admin.permissionRole', compact('roles', 'permissions'));
    }
    public function GestionUsers(){
        $roles = Role::all();
        $users = User::with('roles')->get();
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
        $user->roles()->sync($request->role_id);
        return redirect('/GestionUsers');
    }
}
