<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\EquipmentController;
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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});

// Admin routes
Route::middleware(['auth', 'role'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // User management routes
    Route::resource('users', UserController::class)->except(['show']);

    //Schedule management routes
    Route::resource('schedules', ScheduleController::class)->except(['show']);

    //Medicine management routes
    Route::resource('medicines', MedicineController::class)->except(['show']);

    //Equipment management routes
    Route::resource('equipment', EquipmentController::class)->except(['show']);
});

require __DIR__.'/auth.php';
