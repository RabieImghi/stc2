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
}
