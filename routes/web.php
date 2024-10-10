<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\EquipmentController;
use App\Http\Controllers\Staff\ScheduleController as StaffScheduleController;
use App\Http\Controllers\Staff\DashboardController;
use App\Http\Controllers\Staff\PatientController;
use App\Http\Controllers\Staff\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('aboutus');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('staff.dashboard');
    // })->name('dashboard');

    // Profile routes
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class)->except(['show']);
    Route::resource('schedules', ScheduleController::class)->except(['show']);
    Route::resource('medicines', MedicineController::class)->except(['show']);
    Route::resource('equipment', EquipmentController::class)->except(['show']);
});

Route::middleware(['auth', 'role:staff'])->prefix('staff')->name('staff.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('schedules', StaffScheduleController::class)->only(['index', 'show']);
    Route::resource('resources', ResourceController::class)->only(['index']);
    Route::resource('patients', PatientController::class)->only(['index', 'show']);
});


require __DIR__.'/auth.php';
