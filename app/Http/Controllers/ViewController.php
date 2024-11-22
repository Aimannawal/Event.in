<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index()
    {
        $user = User::all();
        $event = Event::all();

        return view('index', compact('user', 'event'));
    }

    public function event()
    {
        $event = Event::paginate(10);

        return view('events', compact('event'));
    }

    public function detail(string $id)
    {
        $event = Event::find($id);
        return view('event-detail', compact('event'));
    }

    public function category(string $categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $events = Event::where('category_id', $categoryId)->paginate(6);
        $allCategories = Category::all();

        return view('category-events', compact('category', 'events', 'allCategories'));
    }

    public function search(Request $request)
    {
        $search = $request->input('q', '');

        $events = Event::where('title', 'LIKE', "%$search%")
            ->orWhere('description', 'LIKE', "%$search%")
            ->paginate(6);

        return view('search-results', compact('events', 'search'));
    }

    public function storeBooking(Request $request)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to book a ticket.');
        }

        // Validate the incoming request
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id', // Ensure event exists
            'user_id' => 'required|exists:users,id', // Ensure user exists
            'payment_method_id' => 'required|exists:payment_methods,id', // Ensure payment method exists
        ]);

        // Create a new booking (assuming you have a Booking model)
        $booking = new Booking();
        $booking->event_id = $validated['event_id'];
        $booking->user_id = $validated['user_id'];
        $booking->payment_method_id = $validated['payment_method_id'];
        $booking->save(); // Save to the database

        // Redirect with a success message
        return redirect()->route('index')->with('success', 'Ticket booked successfully!');
    }

}
