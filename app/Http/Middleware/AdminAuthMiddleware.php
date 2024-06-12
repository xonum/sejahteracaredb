<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(auth()->user());
        // Check if the user has a role of admin
        if (auth()->user() && auth()->user()->role == 'admin') {
            return $next($request);
        }

        // Redirect to the home page if the user is not an admin
        return redirect()->back();
    }
}
