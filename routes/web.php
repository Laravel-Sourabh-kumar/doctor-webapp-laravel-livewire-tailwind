<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','patient'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('doctor-dashboard',[DoctorController::class,'index'])->middleware('auth', 'verified','doctor');
Route::get('admin-dashboard',[AdminController::class,'index'])->middleware('auth', 'verified','admin');

    
require __DIR__.'/auth.php';
