<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class StaffController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        $bookings = Booking::orderBy('created_at', 'desc')->paginate(10);
        // $pendingBookings = Booking::where('status', 'pending')->count();
        // $pendingPatients = Booking::where('status', 0)->count();

        return view('staff.dashboard', compact('bookings'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('staff.profile', compact('user'));
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
}
