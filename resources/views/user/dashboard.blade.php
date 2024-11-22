@extends('layouts.user')

@section('content')
<div class="space-y-6">
    <h1 class="text-2xl font-bold text-gray-900">Welcome, {{ Auth::user()->name }}!</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Total Bookings</h2>
            <p class="text-3xl font-bold text-[#EB8317]">{{ $totalBookings }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Favorite Category</h2>
            <p class="text-3xl font-bold text-[#EB8317]">{{ $favoriteCategory }}</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Events Recommendation</h2>
        <div class="space-y-4">
            @foreach($eventRecommendations as $event)
                <div class="flex items-center justify-between border-b pb-4">
                    <div>
                        <h3 class="font-semibold">{{ $event->title }}</h3>
                        <p class="text-sm text-gray-600">{{ $event->date }}</p>
                    </div>
                    <a href="{{ route('events.detail', $event->id) }}" class="text-[#EB8317] hover:underline">View Details</a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">History Activity</h2>
        <div class="space-y-4">
            @foreach($activityHistory as $activity)
                <div class="flex items-center justify-between">
                    <div>
                        <p class="font-semibold">Booked {{ $activity->event->title }}</p>
                        <p class="text-sm text-gray-600">{{ $activity->created_at }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
