<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard route with middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Resource routes for teachers, students, classes, and groups
Route::resource('teachers', TeacherController::class)->middleware('auth');
Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('classes', ClassController::class)->middleware('auth');
Route::resource('groups', GroupController::class)->middleware('auth');

// Admin settings page
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/admin/settings', function () {
        return view('admin.settings'); // Create admin/settings.blade.php
    })->name('admin.settings');
});

// Include authentication routes
require __DIR__.'/auth.php';
