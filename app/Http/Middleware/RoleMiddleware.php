<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if logged in
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        // Normalize the role
        $currentRole = strtolower(trim(session('admin_role')));

        // Check if role is allowed
        $allowedRoles = array_map(fn($r) => strtolower(trim($r)), $roles);

        if (!in_array($currentRole, $allowedRoles)) {
            return abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}
