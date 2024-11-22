<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out.');
    }

    public function adminDashboard()
    {
        $totalEvents = Event::count();
        $totalBookings = Booking::count();
        $totalUsers = User::count();
        $recentEvents = Event::latest()->take(3)->get();
        $recentBookings = Booking::with(['event', 'user'])->latest()->take(3)->get();

        return view('admin.dashboard', compact('totalEvents', 'totalBookings', 'totalUsers', 'recentEvents', 'recentBookings'));
    }

    public function userDashboard()
    {
        if (Auth::user()->role !== 'user') {
            return redirect('/')->with('error', 'Access denied. Users only.');
        }

        $userId = Auth::id();

        $totalBookings = Booking::where('user_id', $userId)->count();

        $favoriteCategory = Event::join('bookings', 'events.id', '=', 'bookings.event_id')
            ->where('bookings.user_id', $userId)
            ->select('events.category_id', \DB::raw('COUNT(events.category_id) as count'))
            ->groupBy('events.category_id')
            ->orderBy('count', 'desc')
            ->first();

        $favoriteCategoryName = $favoriteCategory ? $favoriteCategory->category->name : 'No bookings yet';

        $eventRecommendations = Event::where('date', '>=', now())
            ->orderBy('date', 'asc')
            ->take(5)
            ->get();

        $activityHistory = Booking::where('user_id', $userId)
            ->latest()
            ->take(5)
            ->get();

        return view('user.dashboard', [
            'totalBookings' => $totalBookings,
            'favoriteCategory' => $favoriteCategoryName,
            'eventRecommendations' => $eventRecommendations,
            'activityHistory' => $activityHistory,
        ]);
    }
}
