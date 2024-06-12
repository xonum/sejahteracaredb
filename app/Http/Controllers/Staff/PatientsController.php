<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = User::where('role', 'patient')->orderBy('created_at', 'desc')->paginate(10);;
        return view('staff.patients.index', compact('patients'));
    }

    // public function show($id)
    // {
    //     $patient = User::find($id);
    //     return view('staff.patients.show', compact('patient'));
    // }

    public function getSTPatients()
    {
        // $pts = User::query()->where('role', 'patient');
        $pts = User::where('role', 'patient')->get();

        return DataTables::of($pts)
            // ->filterColumn('username', function ($query, $keyword) {
            //     $sql = "pts.username  like ?";
            //     $query->whereRaw($sql, ["%{$keyword}%"]);
            // })
            // ->filterColumn('email', function ($query, $keyword) {
            //     $sql = "pts.email  like ?";
            //     $query->whereRaw($sql, ["%{$keyword}%"]);
            // })
            ->editColumn('status', function ($pt) {
                return $pt->status == 1 ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
            })
            ->editColumn('action', function ($pt) {
                $actionHtml = '';
                if ($pt->status == 1) {
                    $actionHtml .= '<a href="' . route('staff.patients.bookings', $pt->id) . '" class="btn btn-info btn-sm me-2">View Bookings</a>';
                }
                $actionHtml .= '<a href="' . route('staff.patients.edit', $pt->id) . '" class="btn btn-primary btn-sm">Edit</a>
                <form action="' . route('staff.patients.destroy', $pt->id) . '" method="POST" class="d-inline">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <button type="submit" class="btn bg-danger text-white btn-sm" onclick="return confirm(\'Are you sure you want to delete this patient?\')">Delete</button>
                </form>';
                return $actionHtml;
            })
            ->rawColumns(['status', 'action'])->make(true);
    }

    public function edit($id)
    {
        $patient = User::find($id);
        return view('staff.patients.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'nullable',
        ]);

        $patient = User::find($id);
        $patient->username = $request->username;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->password = $request->password ? Hash::make($request->password) : $patient->password;

        $patient->status = $request->status;
        $patient->save();

        return redirect()->route('staff.patients.index')->with('success', 'Patient updated successfully');
    }

    public function destroy($id)
    {
        $patient = User::find($id);
        $patient->delete();

        return redirect()->route('staff.patients.index')->with('success', 'Patient deleted successfully');
    }

    public function bookings($id)
    {
        $patient = User::find($id);
        $bookings = $patient->bookings;
        return view('staff.patients.bookings', compact('patient', 'bookings'));
    }

    public function uploadReport(Request $request)
    {
        $request->validate([
            'report_file' => 'required|mimes:pdf,doc,docx',
        ]);

        $report = $request->file('report_file');
        $reportName = time() . '_' . $report->getClientOriginalName();
        // $report->move(public_path('reports'), $reportName);

        $path = Storage::disk('public')->putFileAs('reports', $report, $reportName);

        $booking = Booking::find($request->booking_id);
        $booking->report = $path;

        $booking->save();


        return back()->with('success', 'Report uploaded successfully');
    }
    public function reports($id)
    {
        $booking = Booking::find($id);
        $reports = $booking->report ?? [];
        $files = [];
        foreach ($reports as $key => $report) {
            $files[] = [
                'id' => $key + 1,
                'report' => $report,
            ];
        }

        return view('staff.patients.reports', compact('booking', 'reports', 'files'));
    }
}
