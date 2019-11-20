<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Auth\Middleware\Authenticate;

class AuthenticateAdmin extends Authenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        if(Auth::check() && Auth::user()->isAdmin() == true){
            return $next($request);
        }

        return redirect('/');
    }
}
