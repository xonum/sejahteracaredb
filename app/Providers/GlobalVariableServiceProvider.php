<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GlobalVariableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $pendingBookings = \App\Models\Booking::where('status', 'pending')->count();
        $pendingPatients = \App\Models\User::where('status', 0)->count();
        view()->share('pending_bookings', $pendingBookings);
        view()->share('pending_patients', $pendingPatients);
    }
}
