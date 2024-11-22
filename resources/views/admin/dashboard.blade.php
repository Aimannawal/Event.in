@extends('layouts.admin')

@section('content')
<div class="space-y-8">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Welcome back, Admin!</h1>
        <p class="text-sm text-gray-500">{{ now()->format('l, F j, Y') }}</p>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-[#EB8317] to-[#d67615] p-6 text-white shadow-lg">
            <div class="flex items-center gap-4">
                <div class="rounded-full bg-white/20 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-white/80">Total Events</p>
                    <p class="text-3xl font-bold">{{ $totalEvents }}</p>
                </div>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-xl bg-white p-6 shadow-lg">
            <div class="flex items-center gap-4">
                <div class="rounded-full bg-[#EB8317]/10 p-3 text-[#EB8317]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Bookings</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalBookings }}</p>
                </div>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-xl bg-white p-6 shadow-lg">
            <div class="flex items-center gap-4">
                <div class="rounded-full bg-[#EB8317]/10 p-3 text-[#EB8317]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Users</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        <div class="rounded-xl bg-white p-6 shadow-lg">
            <h2 class="mb-4 text-lg font-semibold text-gray-900">Recent Events</h2>
            <div class="space-y-4">
                @foreach($recentEvents as $event)
                    <div class="flex items-center justify-between rounded-lg border p-4">
                        <div class="flex items-center gap-4">
                            <div>
                                <p class="font-medium text-gray-900">{{ $event->title }}</p>
                                <p class="text-sm text-gray-500">Created {{ $event->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <a href="{{ route('events.detail', $event->id) }}" class="text-sm font-medium text-[#EB8317] hover:underline">View</a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rounded-xl bg-white p-6 shadow-lg">
            <h2 class="mb-4 text-lg font-semibold text-gray-900">Recent Bookings</h2>
            <div class="space-y-4">
                @foreach($recentBookings as $booking)
                    <div class="flex items-center justify-between rounded-lg border p-4">
                        <div class="flex items-center gap-4">
                            <div>
                                <p class="font-medium text-gray-900">{{ $booking->user->name }}</p>
                                <p class="text-sm text-gray-500">Booked {{ $booking->event->name }}</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-green-100 px-2 py-1 text-xs font-medium text-green-800">Confirmed</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
