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
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to book a ticket.');
        }

        $validated = $request->validate([
            'event_id' => 'required|exists:events,id', 
            'user_id' => 'required|exists:users,id', 
            'payment_method_id' => 'required|exists:payment_methods,id', 
        ]);

        $booking = new Booking();
        $booking->event_id = $validated['event_id'];
        $booking->user_id = $validated['user_id'];
        $booking->payment_method_id = $validated['payment_method_id'];
        $booking->save();

        return redirect()->route('index')->with('success', 'Ticket booked successfully!');
    }

}
