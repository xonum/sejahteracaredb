<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ReportsController extends Controller
{
    public function index()
    {
        return view('patient.reports');
    }

    public function getPTReports()
    {

        $reports = Booking::where('user_id', auth()->user()->id)->where('report', '!=', null)->get();

        return DataTables::of($reports)
            ->addIndexColumn()
            ->addColumn('doctor', function ($row) {
                return $row->doctor->firstname . ' ' . $row->doctor->lastname;
            })
            ->addColumn('action', function ($row) {
                // $btn = '<a href="' . asset('storage/' . $row->report) . '" class="btn btn-primary btn-sm" target="_blank">View Report</a>';
                $btn = '';
                return $btn;
            })
            ->rawColumns(['doctor', 'action'])
            ->make(true);
    }
    public function reports($id)
    {
        $reports = Booking::find($id)->report;
        $booking = Booking::find($id);
        $files = [];
        foreach ($reports ?? [] as $key => $report) {
            $files[] = [
                'id' => $key + 1,
                'report' => $report,
            ];
        }

        return view('patient.reports', compact('files', 'booking'));
    }
}
