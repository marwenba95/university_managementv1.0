<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Apply 'auth' and 'verified' middleware to the dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Apply 'auth' middleware to profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Apply the 'checkRole' middleware to specific routes
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Admin Dashboard';
    });

    // You can add more admin-specific routes here
    Route::get('/admin/settings', function () {
        return 'Admin Settings';
    });
});

// Require additional routes for authentication
require __DIR__.'/auth.php';
