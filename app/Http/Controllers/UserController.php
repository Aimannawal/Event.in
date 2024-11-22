<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myBookings()
{
    $user = auth()->user();
    $bookings = \App\Models\Booking::with('event')
        ->where('user_id', $user->id)
        ->get();

    return view('user.bookings', compact('bookings'));
}

}
