<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard route with 'auth' and 'verified' middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes with 'checkRole:admin' middleware
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Admin Dashboard';
    });
    Route::get('/admin/settings', function () {
        return 'Admin Settings';
    });

    // Add resource routes for admin-related resources
    Route::resource('users', UserController::class);
    Route::resource('classes', ClassController::class);
    Route::resource('groups', GroupController::class);
});

// Add resource routes for students and teachers
Route::middleware('auth')->group(function () {
    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
});

// Include auth routes
require __DIR__.'/auth.php';
