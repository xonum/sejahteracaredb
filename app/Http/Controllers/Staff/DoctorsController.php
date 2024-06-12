<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')->orderBy('created_at', 'desc')->paginate(10);;

        return view('staff.doctors.index', compact('doctors'));
    }

    public function getSTDoctors()
    {
        $doctors = User::where('role', 'doctor')->get();

        return DataTables::of($doctors)
            ->editColumn('role', function ($doctor) {
                return $doctor->role == 'doctor' ? 'Doctor' : 'Nurse';
            })
            ->editColumn('action', function ($doctor) {
                $actionHtml = '';
                $actionHtml .= '<a href="' . route('staff.doctors.edit', $doctor->id) . '" class="btn btn-primary btn-sm">Edit</a>
                <form action="' . route('staff.doctors.destroy', $doctor->id) . '" method="POST" class="d-inline">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <button type="submit" class="btn bg-danger text-white btn-sm" onclick="return confirm(\'Are you sure you want to delete this doctor?\')">Delete</button>
                </form>';
                return $actionHtml;
            })
            ->rawColumns(['status', 'action'])->make(true);
    }

    public function create()
    {
        return view('staff.doctors.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // Validate the request...
        $request->validate([
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'address' => 'nullable',
            // 'specialization' => 'required',
            // 'qualification' => 'required',
            // 'experience' => 'required',
            'password' => 'required',
        ]);

        // Store the new doctor...
        $user = new User();
        $user->role = 'doctor';
        $user->designation = $request->designation ?? 'Medical Doctor';
        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::disk('public')->putFileAs('profile_pictures', $file, $filename);
            $path = URL::to('/') . '/storage/' . $file->storeAs('profile_pictures', $filename, 'public');
            $user->profile_picture = $path;
        } else {
            $user->profile_picture = URL::to('/') . '/assets/images/default-pro.jpg';
        }

        $user->status = 1;

        $user->save();

        // Redirect to the doctors list page...
        return redirect()->route('staff.doctors.index')->with('success', 'Doctor added successfully!');
    }

    public function edit(User $doctor)
    {
        return view('staff.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, User $doctor)
    {
                    // Validate the request...
        $request->validate([
            'username' => 'required|string|unique:users,username,' . $doctor->id,
            'email' => 'required|email|unique:users,email,' . $doctor->id,
            'phone' => 'nullable',
            'address' => 'nullable',
            'password' => 'nullable|min:6',
        ]);

        // Update the doctor...
        $doctor->designation = $request->designation;
        $doctor->username = $request->username;
        $doctor->firstname = $request->firstname;
        $doctor->lastname = $request->lastname;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->password = $request->password ? Hash::make($request->password) : $doctor->password;

        if ($request->hasFile('profile_picture')) {
            $oldFile = $doctor->profile_picture;
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::disk('public')->putFileAs('profile_pictures', $file, $filename);
            $path = URL::to('/') . '/storage/' . $file->storeAs('profile_pictures', $filename, 'public');
            $doctor->profile_picture = $path;
            if ($oldFile) {
                $oldpath = str_replace(URL::to('/') . '/storage/', '', $oldFile);
                Storage::disk('public')->delete($oldpath);
            }
        } else {
            $doctor->profile_picture = URL::to('/') . '/assets/images/default-pro.jpg';
        }

        $doctor->save();

        // Redirect to the doctors list page...
        return redirect()->route('staff.doctors.index')->with('success', 'Doctor updated successfully!');
    }


    public function destroy(User $doctor)
    {
        // Delete the doctor...
        Storage::disk('public')->delete($doctor->profile_picture);
        $doctor->delete();


        // Redirect to the doctors list page...
        return redirect()->route('staff.doctors.index')->with('success', 'Doctor deleted successfully!');
    }
}
