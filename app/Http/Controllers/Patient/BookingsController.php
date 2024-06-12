<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingSetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('user_id', auth()->id())->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('patient.bookings.index', compact('bookings'));
    }

    public function getPTBookings()
    {
        $bookings = Booking::where('user_id', auth()->id())->get();

        return DataTables::of($bookings)
            ->addColumn('doctor', function ($booking) {
                return $booking->doctor_id ? $booking->doctor->firstname . ' ' . $booking->doctor->lastname : 'N/A';
            })
            ->editColumn('status', function ($booking) {
                return $booking->status == 'pending' ? '<span class="badge bg-red-lt">Pending</span>' : '<span class="badge bg-green-lt">Approved</span>';
            })
            ->editColumn('action', function ($booking) {
                $actionHtml = ($booking->report ? '<a href="' . route('patient.reports', $booking->id) . '" class="btn btn-info btn-sm me-2">View Reports</a>' : '') .
                    '<a href="' . route('patient.bookings.edit', $booking->id) . '" class="btn btn-primary btn-sm">Edit</a>
               <form action="' . route('patient.bookings.destroy', $booking->id) . '" method="POST" class="d-inline">
                   ' . csrf_field() . '
                   ' . method_field('DELETE') . '
                   <button type="submit" class="btn bg-danger text-white btn-sm" onclick="return confirm(\'Are you sure you want to delete this booking?\')">Delete</button>
               </form>';
                return $actionHtml;
            })
            ->rawColumns(['doctor', 'status', 'action'])->make(true);
    }

    public function create()
    {
        $disabledDates = BookingSetting::first()->disabled_dates;
        $settings = BookingSetting::first();
        $doctors = User::where('role', 'doctor')->get();
        $bookings = Booking::all();

        $bookedDateTimes = [];

        foreach ($bookings as $bk) {
            $date = $bk->booking_date;
            $time = substr($bk->booking_time, 0, 5);
            $bookedDateTimes[] = "$date=$time";
        }

        // return $bookedDateTimes;


        // dd($disabledDates);
        return view('patient.bookings.create', compact('disabledDates', 'doctors', 'settings', 'bookedDateTimes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_date' => 'required|date|after_or_equal:today',
            'booking_time' => 'required',
            'reason' => 'required',
        ]);
        // dd($request->all());
        $booking = new Booking();
        $booking->user_id = $request->userId;
        $booking->doctor_id = $request->doctor_id ?? null;
        $booking->booking_date = $request->booking_date;
        $booking->booking_time = $request->booking_time;
        $booking->reason = $request->reason;
        $booking->save();


        return redirect()->route('patient.bookings.index')->with('success', 'Booking created successfully');
    }

    // public function show(Booking $booking)
    // {
    //     return view('patient.bookings.show', compact('booking'));
    // }

    public function edit(Booking $booking)
    {
        $disabledDates = BookingSetting::first()->disabled_dates;
        $doctors = User::where('role', 'doctor')->get();
        $settings = BookingSetting::first();
        $bookings = Booking::all();
        $bookedDateTimes = [];

        foreach ($bookings as $bk) {
            $date = $bk->booking_date;
            $time = substr($bk->booking_time, 0, 5);
            $bookedDateTimes[] = "$date=$time";
        }

        return view('patient.bookings.edit', compact('booking', 'settings', 'disabledDates', 'doctors', 'bookedDateTimes'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'booking_date' => 'required|date|after_or_equal:today',
            'booking_time' => 'required',
            'reason' => 'required',
        ]);
        // dd($request->all());

        $booking->doctor_id = $request->doctor_id ?? null;
        $booking->booking_date = $request->booking_date;
        $booking->booking_time = $request->booking_time;
        $booking->reason = $request->reason;
        $booking->status = 'pending';
        $booking->save();

        return redirect()->route('patient.bookings.index')->with('success', 'Booking updated successfully');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('patient.bookings.index')->with('success', 'Booking deleted successfully');
    }
}
