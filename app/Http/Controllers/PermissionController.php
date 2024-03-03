<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function addPermissionUser(Request $request){
        $request->validate([
            'user_id'=>'required',
            'permisssion_id'=>'required',
        ]);
        $userId = $request->input('user_id');
        $permissions = $request->permisssion_id;
        $user = User::where('id',$userId)->with('permissions')->first();
        foreach($permissions as $permission){
            if($user->permissions->where('id',$permission)->count() > 0) continue; 
            else $user->permissions()->attach($permission);
        }
        return redirect('/PermissionUser');
    }
    public function deletePermissionUser(Request $request){
        $request->validate([
            'user_id'=>'required',
            'permission_id'=>'required',
        ]);
        $userId = $request->input('user_id');
        $user = User::where('id',$userId)->with('permissions')->first();
        $user->permissions()->detach($request->permission_id);
        return redirect('/PermissionUser');
    }
    public function AddPermissionRole(Request $request){
        $request->validate([
            'role_id'=>'required',
            'permission_id'=>'required',
        ]);
        $roleId = $request->input('role_id');
        $permissions = $request->permission_id;
        $role = Role::where('id',$roleId)->with('permissions')->first();
        foreach($permissions as $permission){
            if($role->permissions->where('id',$permission)->count() > 0) continue; 
            else $role->permissions()->attach($permission);
        }
        return redirect('/PermissionRole');
    }
    public function deletePermissionRole(Request $request){
        $request->validate([
            'role_id'=>'required',
            'permission_id'=>'required',
        ]);
        $roleId = $request->input('role_id');
        $role = Role::where('id',$roleId)->with('permissions')->first();
        $role->permissions()->detach($request->permission_id);
        return redirect('/PermissionRole');
    }
}
