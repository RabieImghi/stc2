<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;
use App\Console\Commands\AddPermission;
class HasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        AddPermission::handle();
        $uri = $request->route()->uri;
        if(auth()->user()){
            $user = auth()->user();
            $permissionsRole = $user->roles->first()->permissions->pluck('name')->toArray();
            $permissionsUser = $user->permissions->pluck('name')->toArray();
            if(in_array($uri, $permissionsRole) && in_array($uri, $permissionsUser)) return $next($request);
            else if($uri != 'error') return  redirect('/error'); else return $next($request);
        }else{
            $permissionsRole = Role::where('name', 'visiteur')->first()->permissions->pluck('name')->toArray();
            if(in_array($uri, $permissionsRole)) return $next($request);
            else return redirect('/error');
        }
    }
}
