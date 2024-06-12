<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                switch (Auth::user()->role) {
                    case 'admin':
                        return redirect(RouteServiceProvider::ADMIN_HOME);
                    case 'staff':
                        return redirect(RouteServiceProvider::STAFF_HOME);
                    case 'doctor':
                        return redirect(RouteServiceProvider::DOCTOR_HOME);
                    case 'patient':
                        return redirect(RouteServiceProvider::PATIENT_HOME);
                }
            }
        }

        return $next($request);
    }
}
