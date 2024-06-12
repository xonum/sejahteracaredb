<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables;

class DoctorController extends Controller
{
    public function index()
    {
        // return view('doctor.dashboard');
        $bookings = Booking::where('doctor_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);
        // $pendingBookings = Booking::where('status', 'pending')->count();
        // $pendingPatients = Booking::where('status', 0)->count();

        return view('doctor.dashboard', compact('bookings'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('doctor.profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);

        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = $request->password ? Hash::make($request->password) : $user->password;

        if ($request->hasFile('profile_picture')) {
            $oldFile = $user->profile_picture;

            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::disk('public')->putFileAs('profile_pictures', $file, $filename);
            $path = URL::to('/') . '/storage/' . $file->storeAs('profile_pictures', $filename, 'public');
            $user->profile_picture = $path;
            if ($oldFile) {
                $oldpath = str_replace(URL::to('/') . '/storage/', '', $oldFile);
                Storage::disk('public')->delete($oldpath);
            }
        }

        if ($request->hasFile('matric_card')) {
            $oldFile = $user->matric_card;
            // dd($oldFile);
            $file = $request->file('matric_card');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::disk('public')->putFileAs('matric_cards', $file, $filename);
            $path = URL::to('/') . '/storage/' . $file->storeAs('matric_cards', $filename, 'public');
            $user->matric_card = $path;
            if ($oldFile) {
                $oldpath = str_replace(URL::to('/') . '/storage/', '', $oldFile);
                Storage::disk('public')->delete($oldpath);
            }
        }


        $user->save();



        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function bookings()
    {
        $bookings = Booking::where('doctor_id', auth()->user()->id)->get();

        // return $bookings;
        return view('doctor.bookings.index', compact('bookings'));
    }

    public function getDTBookings()
    {
        $bookings = Booking::where('doctor_id', auth()->user()->id)->get();

        return DataTables::of($bookings)
            ->editColumn('status', function ($booking) {
                return $booking->status == 'approved' ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
            })
            ->addColumn('patient', function ($booking) {
                return $booking->user->firstname . ' ' . $booking->user->lastname;
            })
            ->editColumn('action', function ($booking) {
                $actionHtml = '';
                if ($booking->status == 'approved') {
                    $actionHtml .= '<a href="' . route('doctor.reports.index', $booking->id) . '" class="btn btn-info btn-sm me-2">View Reports</a>';
                }
                return $actionHtml;
            })
            ->rawColumns(['status', 'action', 'patient'])->make(true);
    }


    public function reports($id)
    {
        $reports = Booking::find($id)->report;
        // dd($reports);
        $booking = Booking::find($id);
        $files = [];
        foreach ($reports ?? [] as $key => $report) {
            $files[] = [
                'id' => $key + 1,
                'report' => $report,
            ];
        }

        return view('doctor.bookings.reports.index', compact('booking', 'reports', 'files'));
    }

    public function getDTReports(Request $request)
    {
        $reports = Booking::find($request->booking_id)->report;

        $data = [];
        foreach ($reports as $key => $report) {
            $data[] = [
                'id' => $key + 1,
                'report' => '<a href="' . asset('storage/' . $report) . '" target="_blank">Report ' . ($key + 1) . '</a>',
            ];
        }

        return DataTables::of(collect($data))->make(true);
    }

    public function uploadReports(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'report_file' => 'required|mimes:pdf,doc,docx',
        // ]);

        // $report = $request->file('report_file');
        // $reportName = time() . '_' . $report->getClientOriginalName();
        // // $report->move(public_path('reports'), $reportName);

        // $path = Storage::disk('public')->putFileAs('reports', $report, $reportName);

        // $booking = Booking::find($request->booking_id);
        // $booking->report = $path;

        // $booking->save();

        $booking = Booking::find($request->booking_id);

        $reports = $booking->report ?? [];

        if ($request->hasFile('report_file')) {
            $files = $request->file('report_file');
            foreach ($files as $file) {
                $reportName = time() . '_' . $file->getClientOriginalName();
                // $path = Storage::disk('public')->putFileAs('reports', $file, $reportName);
                $path = URL::to('/') . '/storage/' . $file->storeAs('reports', $reportName, 'public');
                array_push($reports, $path);
            }
        }

        $booking->report = $reports;

        $booking->save();


        return back()->with('success', 'Report uploaded successfully');
    }

    public function deleteReport(Request $request)
    {
        $booking = Booking::find($request->booking_id);
        $booking->report = array_filter($booking->report, function ($report) use ($request) {
            return $report != $request->report;
        });

        // update the reports folder
        $path = str_replace(URL::to('/') . '/storage/', '', $request->report);
        Storage::disk('public')->delete($path);



        $booking->save();

        return back()->with('success', 'Report deleted successfully');
    }
}
