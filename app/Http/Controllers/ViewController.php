<?php

namespace App\Http\Controllers;

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
}
