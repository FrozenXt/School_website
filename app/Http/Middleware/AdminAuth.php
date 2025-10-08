<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Check if admin is logged in
        if (!session()->has('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login first.');
        }

        return $next($request);
    }
}
