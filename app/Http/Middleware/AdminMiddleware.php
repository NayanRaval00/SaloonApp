<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $admin = Auth::guard('admin')->user(); 
        if (!$admin || !$admin->hasRole('admin')) {
            return redirect()->route('admin.login')->with('error', 'Access Denied!');
        }
        return $next($request);
    }
}
