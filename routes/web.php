<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// route before using auth
Route::get('/', function () {
    return view('index');
});

Route::get('/event', function () {
    return view('events');
});

Route::get('/category', function () {
    return view('category-events');
});

Route::get('/search', function () {
    $searchQuery = request('q', 'chiquitita');
    return view('search-results', ['searchQuery' => $searchQuery]);
})->name('search');

Route::get('/event/{id}', function ($id) {
    return view('event-detail', ['id' => $id]);
})->name('event.detail');

// route auth
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/user', [AuthController::class, 'userDashboard'])->name('user.dashboard');