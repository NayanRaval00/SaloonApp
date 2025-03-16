<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $web = Auth::guard('web')->user();
        if (!$web || !$web->hasRole('user')) {
            return redirect()->route('users.login')->with('error', 'Access Denied!');
        }
        return $next($request);
    }
}
