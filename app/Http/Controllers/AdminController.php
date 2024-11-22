<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Booking;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function indexBookings()
    {
        $bookings = Booking::with(['event', 'paymentMethod', 'user'])->get();

        return view('admin.bookings.index', compact('bookings'));
    }

    public function index()
    {
        $events = Event::with('category')->get();
        return view('admin.events.index', compact('events'));
    }

    public function show()
    {
        $categories = Category::all();
        $events = Event::with('category')->get();
        return view('admin.events.create', compact('events', 'categories'));
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return redirect()->route('admin.events.index')->with('error', 'Event not found.');
        }

        $event->delete();

        return redirect()->route('admin.events')->with('success', 'Event deleted successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|exists:categories,id',
            'date' => 'required|date|after_or_equal:today',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'organizer' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $imagePath = null;
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('events', 'public');
        }

        $event = Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'date' => $request->input('date'),
            'location' => $request->input('location'),
            'price' => $request->input('price'),
            'organizer' => $request->input('organizer'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'image_url' => $imagePath,
        ]);

        return redirect()->route('admin.events')->with('success', 'Event created successfully!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categories = Category::all();

        return view('admin.events.edit', compact('event', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'price' => 'required|numeric|min:0',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $event->category_id = $request->category_id;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->price = $request->price;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->organizer = $request->organizer;
        $event->email = $request->email;
        $event->phone = $request->phone;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $event->image_url = $imagePath;
        }

        $event->save();

        return redirect()->route('admin.events')->with('success', 'Event updated successfully.');
    }
}
