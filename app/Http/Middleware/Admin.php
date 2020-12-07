<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if ADMIN
        if(auth()->user()->user_role === 'admin'){
            return $next($request);
        }

        // if MANAGER
        if(auth()->user()->user_role === 'manager'){
            return redirect()->route('manager.home'); 
        }

        // if USER
        if(auth()->user()->user_role === 'user'){
            return redirect()->route('user.home'); 
        }
        
    }
}
