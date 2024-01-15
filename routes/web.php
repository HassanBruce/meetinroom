<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MeetingRoomController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:Administrator'])->group(function () {
    // Employee Management
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/employees/{employee}/update', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employees.destroy');
    Route::get('/calendar', [MeetingController::class, 'index'])->name('calendar.index');
    Route::get('/meetings/create', [MeetingController::class, 'create'])->name('meetings.create');
    Route::post('/meetings/store', [MeetingController::class, 'store'])->name('meetings.store');
    Route::get('/book-meeting', [MeetingBookingController::class, 'create'])->name('meetings.create');
Route::post('/book-meeting', [MeetingBookingController::class, 'store'])->name('meetings.store');
});