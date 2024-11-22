@extends('layouts.user')

@section('content')
<div class="space-y-6">
    <h1 class="text-2xl font-bold text-gray-900">Welcome, {{ Auth::user()->name }}!</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Upcoming Events</h2>
            <p class="text-3xl font-bold text-[#EB8317]">3</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Total Bookings</h2>
            <p class="text-3xl font-bold text-[#EB8317]">12</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Favorite Category</h2>
            <p class="text-3xl font-bold text-[#EB8317]">Music</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Upcoming Events</h2>
        <div class="space-y-4">
            @foreach([
                ['title' => 'Summer Music Festival', 'date' => '2023-07-15', 'location' => 'Central Park, NY'],
                ['title' => 'Tech Conference 2023', 'date' => '2023-09-22', 'location' => 'Convention Center, SF'],
                ['title' => 'Food & Wine Expo', 'date' => '2023-08-05', 'location' => 'Exposition Hall, Chicago'],
            ] as $event)
                <div class="flex items-center justify-between border-b pb-4">
                    <div>
                        <h3 class="font-semibold">{{ $event['title'] }}</h3>
                        <p class="text-sm text-gray-600">{{ date('M d, Y', strtotime($event['date'])) }} - {{ $event['location'] }}</p>
                    </div>
                    <a href="#" class="text-[#EB8317] hover:underline">View Details</a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Recent Activity</h2>
        <div class="space-y-4">
            @foreach([
                ['action' => 'Booked', 'event' => 'Summer Music Festival', 'date' => '2023-06-01'],
                ['action' => 'Viewed', 'event' => 'Tech Conference 2023', 'date' => '2023-05-28'],
                ['action' => 'Favorited', 'event' => 'Food & Wine Expo', 'date' => '2023-05-25'],
            ] as $activity)
                <div class="flex items-center justify-between">
                    <div>
                        <p class="font-semibold">{{ $activity['action'] }} {{ $activity['event'] }}</p>
                        <p class="text-sm text-gray-600">{{ date('M d, Y', strtotime($activity['date'])) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

