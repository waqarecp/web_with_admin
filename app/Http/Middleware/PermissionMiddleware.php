<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Spatie\Permission\Models\Permission;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $permission = null, $guard = null)
    {   
        // Permission::create(['name'=>'edit post']);
        // auth()->user()->givePermissionTo('users.index');
        $authGuard = app('auth')->guard($guard);
        // dd(auth()->user()->getPermissionsViaRoles());

        if ($authGuard->guest()) {
            throw UnauthorizedException::notLoggedIn();
        }
        
        if (! is_null($permission)) {
            $permissions = is_array($permission)
                ? $permission
                : explode('|', $permission);
        }

        if ( is_null($permission) ) {
            $permission = $request->route()->getName();

            $permissions = array($permission);
        }
        

        foreach ($permissions as $permission) {

            // dd($permission);
            $roles = $authGuard->user()->getRoleNames();
            $user = auth()->user();

// get all inherited permissions for that user
// $permissions = $user->getAllPermissions();

// dd($permission);
            if ($authGuard->user()->can($permission)) {
                return $next($request);
            }
        }
       

        throw UnauthorizedException::forPermissions($permissions);
    }
}
