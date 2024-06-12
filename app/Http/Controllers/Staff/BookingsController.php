<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingSetting;
use App\Models\User;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->paginate(10);;
        return view('staff.bookings.index', compact('bookings'));
    }



    public function show($id)
    {
        return view('staff.bookings.show');
    }

    public function edit($id)
    {
        $booking = Booking::find($id);
        $doctors = User::where('role', 'doctor')->get();
        $disabledDates = BookingSetting::first()->disabled_dates;
        $patient = $booking->user;
        $settings = BookingSetting::first();
        $bookings = Booking::all();
        $bookedDateTimes = [];

        // return $booking;
        foreach ($bookings as $bk) {
            $date = $bk->booking_date;
            $time = substr($bk->booking_time, 0, 5);
            $bookedDateTimes[] = "$date=$time";
        }

        $bookedDateTimes = [];
        return view('staff.bookings.edit', compact('booking', 'doctors', 'disabledDates', 'patient', 'bookedDateTimes', 'settings'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'booking_date' => 'required|date|after_or_equal:today',
            'booking_time' => 'required',
            'reason' => 'required',
        ]);

        $booking = Booking::find($id);
        $booking->doctor_id = $request->doctor_id;
        $booking->booking_date = $request->booking_date;
        $booking->booking_time = $request->booking_time;
        $booking->reason = $request->reason;
        $booking->status = $request->status;
        $booking->save();

        return redirect()->route('staff.bookings.index')->with('success', 'Booking updated successfully');
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->route('staff.bookings.index')->with('success', 'Booking deleted successfully');
    }

    public function addExceptions()
    {
        // dd('addExceptions');
        return view('staff.bookings.partials.exception');
    }

    public function settings()
    {
        $settings = BookingSetting::first();
        return view('staff.bookings.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $settings = BookingSetting::first();
        $settings->disabled_dates = $request->disabled_dates ?? null;
        $settings->time_interval = $request->time_interval ?? 15;
        $settings->save();

        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
