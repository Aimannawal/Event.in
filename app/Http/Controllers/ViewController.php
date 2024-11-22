<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

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
}
