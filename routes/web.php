<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;

// route before using auth
Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/event', [ViewController::class, 'event'])->name('event');
Route::get('/category/{id}', [viewController::class, 'category'])->name('category.events');
Route::get('/search', [ViewController::class, 'search'])->name('search');
Route::get('/events/{id}', [ViewController::class, 'detail'])->name('events.detail');

// route auth
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// route admin
Route::get('/admin', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/event_admin', [AdminController::class, 'index'])->name('admin.events');
Route::delete('/admin/events/{id}', [AdminController::class, 'destroy'])->name('admin.events.destroy');

Route::get('/events/{id}/edit', [AdminController::class, 'edit'])->name('admin.events.edit');
Route::post('/events/{id}/update', [AdminController::class, 'update'])->name('admin.events.update');

Route::get('/admin/create', [AdminController::class, 'show'])->name('admin.events.create');
Route::post('/admin/events', [AdminController::class, 'store'])->name('admin.events.store');

Route::get('/bookings', [AdminController::class, 'indexBookings'])->name('admin.bookings');

// route user
Route::get('/user', [AuthController::class, 'userDashboard'])->name('user.dashboard');
Route::get('/my-bookings', [UserController::class, 'myBookings'])->name('user.bookings');
Route::post('/booking', [ViewController::class, 'storeBooking'])->name('booking.store');
