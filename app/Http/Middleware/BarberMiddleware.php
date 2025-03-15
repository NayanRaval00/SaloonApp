<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarberMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $barber = Auth::guard('barber')->user(); 
        if (!$barber || !$barber->hasRole('barber')) {
            return redirect()->route('barber.login')->with('error', 'Access Denied!');
        }
        return $next($request);
    }
}
