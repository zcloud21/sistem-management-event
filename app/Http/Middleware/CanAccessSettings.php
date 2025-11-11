<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CanAccessSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        
        // Allow access if user has SuperUser or Owner role
        if ($user && ($user->hasRole('Super User') || $user->hasRole('Owner'))) {
            return $next($request);
        }

        abort(403, 'Unauthorized access to settings');
    }
}
