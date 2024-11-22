<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;

// route before using auth
Route::get('/', [ViewController::class, 'index'])->name('index');

Route::get('/event', [ViewController::class, 'event'])->name('event');

Route::get('/category/{id}', [viewController::class, 'category'])->name('category.events');

Route::get('/search', function () {
    $searchQuery = request('q', 'chiquitita');
    return view('search-results', ['searchQuery' => $searchQuery]);
})->name('search');

Route::get('/events/{id}', [ViewController::class, 'detail'])->name('events.detail');

// route auth
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// route admin
Route::get('/admin', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/admin_event', function () {
    return view('admin.events.index');
})->name('admin.events');

Route::get('/admin_event_edit', function () {
    return view('admin.events.edit');
})->name('admin.events.edit');

Route::get('/admin_event_create', function () {
    return view('admin.events.create');
})->name('admin.events.create');

Route::get('/admin_booking', function () {
    return view('admin.bookings.index');
})->name('admin.bookings');

// route user
Route::get('/user', [AuthController::class, 'userDashboard'])->name('user.dashboard');

Route::get('/user_booking', function () {
    return view('user.bookings');
})->name('user.bookings');