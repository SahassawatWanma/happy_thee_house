<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->role === $role) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}

