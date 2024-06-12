<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Patient\BookingsController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Staff\BookingsController as StaffBookingsController;
use App\Http\Controllers\Staff\DoctorsController;
use App\Http\Controllers\Staff\PatientsController;
use App\Http\Controllers\Admin\StaffsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Patient\ReportsController;
use App\Http\Controllers\Staff\StaffController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about_us');
});
Route::get('/doctors', function () {
    $doctors = \App\Models\User::where('role', 'doctor')->get();

    return view('doctors', compact('doctors'));
});
Route::get('/faq', function () {
    return view('faq');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth:sanctum'])->group(function () {
    // Routes accessible to admins only
    Route::middleware('admin.auth')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

        // Staffs routes
        Route::get('/admin/staffs', [StaffsController::class, 'index'])->name('admin.staffs.index');
        Route::get('/admin/staffs/create', [StaffsController::class, 'create'])->name('admin.staffs.create');
        Route::post('/admin/staffs', [StaffsController::class, 'store'])->name('admin.staffs.store');
        Route::get('/admin/staffs/{staff}/edit', [StaffsController::class, 'edit'])->name('admin.staffs.edit');
        Route::put('/admin/staffs/{staff}', [StaffsController::class, 'update'])->name('admin.staffs.update');
        Route::delete('/admin/staffs/{staff}', [StaffsController::class, 'destroy'])->name('admin.staffs.destroy');

        // profile
        Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::put('/admin/profile/{admin}', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    });

    // Routes accessible to staffs only
    Route::middleware('staff.auth')->group(function () {
        Route::get('/staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');

        // Doctors routes
        Route::get('/staff/doctors', [DoctorsController::class, 'index'])->name('staff.doctors.index');
        Route::get('/staff/doctors/create', [DoctorsController::class, 'create'])->name('staff.doctors.create');
        Route::post('/staff/doctors', [DoctorsController::class, 'store'])->name('staff.doctors.store');
        Route::get('/staff/doctors/{doctor}/edit', [DoctorsController::class, 'edit'])->name('staff.doctors.edit');
        Route::put('/staff/doctors/{doctor}', [DoctorsController::class, 'update'])->name('staff.doctors.update');
        Route::delete('/staff/doctors/{doctor}', [DoctorsController::class, 'destroy'])->name('staff.doctors.destroy');
        Route::get('/getSTDoctors', [DoctorsController::class, 'getSTDoctors'])->name('getSTDoctors');

        // Patients routes
        Route::get('/staff/patients', [PatientsController::class, 'index'])->name('staff.patients.index');
        Route::get('/getSTPatients', [PatientsController::class, 'getSTPatients'])->name('getSTPatients');
        Route::get('/staff/patients/{patient}/edit', [PatientsController::class, 'edit'])->name('staff.patients.edit');
        Route::put('/staff/patients/{patient}', [PatientsController::class, 'update'])->name('staff.patients.update');
        Route::delete('/staff/patients/{patient}', [PatientsController::class, 'destroy'])->name('staff.patients.destroy');
        Route::get('/staff/patients/{patient}/bookings', [PatientsController::class, 'bookings'])->name('staff.patients.bookings');
        Route::post('/uploadReport', [PatientsController::class, 'uploadReport'])->name('upload.report');
        Route::get('/staff/bookings/{booking}/reports', [PatientsController::class, 'reports'])->name('staff.bookings.reports.index');


        // Bookings routes
        Route::get('/staff/bookings/settings', [StaffBookingsController::class, 'settings'])->name('staff.bookings.settings');
        Route::post('/staff/bookings/settings', [StaffBookingsController::class, 'updateSettings'])->name('staff.bookings.updateSettings');
        Route::get('/addExceptions', [StaffBookingsController::class, 'addExceptions'])->name('addExceptions');
        Route::get('/staff/bookings', [StaffBookingsController::class, 'index'])->name('staff.bookings.index');
        // Route::get('/staff/bookings/{booking}', [BookingsController::class, 'show'])->name('staff.bookings.show');
        Route::get('/staff/bookings/{booking}/edit', [StaffBookingsController::class, 'edit'])->name('staff.bookings.edit');
        Route::put('/staff/bookings/{booking}', [StaffBookingsController::class, 'update'])->name('staff.bookings.update');
        Route::delete('/staff/bookings/{booking}', [StaffBookingsController::class, 'destroy'])->name('staff.bookings.destroy');

        // profile
        Route::get('/staff/profile', [StaffController::class, 'profile'])->name('staff.profile');
        Route::put('/staff/profile/{staff}', [StaffController::class, 'updateProfile'])->name('staff.profile.update');
    });

    // Routes accessible to doctors only
    Route::middleware('doctor.auth')->group(function () {
        Route::get('/doctor/dashboard', [DoctorController::class, 'index'])->name('doctor.dashboard');
        Route::get('/doctor/bookings', [DoctorController::class, 'bookings'])->name('doctor.bookings.index');
        Route::get('/getDTBookings', [DoctorController::class, 'getDTBookings'])->name('getDTBookings');
        Route::get('/doctor/reports/{id}', [DoctorController::class, 'reports'])->name('doctor.reports.index');
        Route::post('/uploadReports', [DoctorController::class, 'uploadReports'])->name('upload.reports');
        Route::get('/getDTReports', [DoctorController::class, 'getDTReports'])->name('getDTReports');
        Route::delete('/deleteReport', [DoctorController::class, 'deleteReport'])->name('delete.report');

        // profile
        Route::get('/doctor/profile', [DoctorController::class, 'profile'])->name('doctor.profile');
        Route::put('/doctor/profile/{doctor}', [DoctorController::class, 'updateProfile'])->name('doctor.profile.update');
    });

    // Routes accessible to patients only
    Route::middleware('patient.auth')->group(function () {
        Route::get('/patient/dashboard', [PatientController::class, 'index'])->name('patient.dashboard');

        // Bookings routes
        Route::get('/patient/bookings', [BookingsController::class, 'index'])->name('patient.bookings.index');
        Route::get('/patient/bookings/create', [BookingsController::class, 'create'])->name('patient.bookings.create');
        Route::post('/patient/bookings', [BookingsController::class, 'store'])->name('patient.bookings.store');
        Route::get('/patient/bookings/{booking}/edit', [BookingsController::class, 'edit'])->name('patient.bookings.edit');
        Route::put('/patient/bookings/{booking}', [BookingsController::class, 'update'])->name('patient.bookings.update');
        Route::delete('/patient/bookings/{booking}', [BookingsController::class, 'destroy'])->name('patient.bookings.destroy');

        Route::get('/getPTBookings', [BookingsController::class, 'getPTBookings'])->name('getPTBookings');

        // reports
        // Route::get('/patient/reports', [ReportsController::class, 'index'])->name('patient.reports.index');
        // Route::get('/getPTReports', [ReportsController::class, 'getPTReports'])->name('getPTReports');
        Route::get('/patient/reports/{id}', [ReportsController::class, 'reports'])->name('patient.reports');

        // profile
        Route::get('/patient/profile', [PatientController::class, 'profile'])->name('patient.profile');
        Route::put('/patient/profile/{patient}', [PatientController::class, 'updateProfile'])->name('patient.profile.update');
    });
});


require __DIR__ . '/auth.php';
