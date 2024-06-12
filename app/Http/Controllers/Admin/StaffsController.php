<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.staffs.index', [
            'staffs' => User::where('role', 'staff')->orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'nullable',
            'address' => 'nullable',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->role = 'staff';
        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::disk('public')->putFileAs('profile_pictures', $file, $filename);
            $path = URL::to('/') . '/storage/' . $file->storeAs('profile_pictures', $filename, 'public');

            $user->profile_picture = $path;
        } else {
            $user->profile_picture = 'assets/images/default-pro.jpg';
        }

        $user->status = 1;

        $user->save();


        return redirect()->route('admin.staffs.index')->with('success', 'Staff added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $staff = User::findOrFail($id);

        return view('admin.staffs.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $staff)
    {
        $request->validate([
            'username' => 'required|string|unique:users,username,' . $staff->id,
            'email' => 'required|email|unique:users,email,' . $staff->id,
            'phone' => 'nullable',
            'address' => 'nullable',
            'password' => 'nullable|min:6',
        ]);

        // dd($request->all());
        $staff->username = $request->username;
        $staff->firstname = $request->firstname;
        $staff->lastname = $request->lastname;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->address = $request->address;
        if ($request->password) {
            $staff->password = bcrypt($request->password);
        }
        if ($request->hasFile('profile_picture')) {
            $oldFile = $staff->profile_picture ? basename($staff->profile_picture) : null;
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // $path = Storage::disk('public')->putFileAs('profile_pictures', $file, $filename);
            $path = URL::to('/') . '/storage/' . $file->storeAs('profile_pictures', $filename, 'public');
            $staff->profile_picture = $path;
            Storage::disk('public')->delete('profile_pictures/' . $oldFile);
        }

        $staff->save();

        return redirect()->route('admin.staffs.index')->with('success', 'Staff updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Storage::disk('public')->delete($user->profile_picture);
        $user->delete();

        return redirect()->route('admin.staffs.index')->with('success', 'Staff deleted successfully!');
    }
}
