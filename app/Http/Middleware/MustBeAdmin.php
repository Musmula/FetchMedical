<?php

namespace App\Http\Middleware;

use Alert;
use Closure;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\Auth;

class MustBeAdmin
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
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        alert()->error('You don\'t have permission to perform that action');
        return redirect('/home');
    }
}
