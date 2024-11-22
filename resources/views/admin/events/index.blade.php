@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Events</h1>
        <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-[#EB8317] text-white rounded-lg hover:bg-[#d67615] transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Create New Event
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([
            ['id' => 1, 'title' => 'Summer Music Festival', 'date' => '2023-07-15', 'category' => 'Music', 'price' => 49.99, 'image' => 'https://source.unsplash.com/random/800x600?concert', 'bookings' => 45],
            ['id' => 2, 'title' => 'Tech Conference 2023', 'date' => '2023-09-22', 'category' => 'Technology', 'price' => 199.99, 'image' => 'https://source.unsplash.com/random/800x600?technology', 'bookings' => 120],
            ['id' => 3, 'title' => 'Food & Wine Expo', 'date' => '2023-08-05', 'category' => 'Food', 'price' => 29.99, 'image' => 'https://source.unsplash.com/random/800x600?food', 'bookings' => 89],
            ['id' => 4, 'title' => 'Art Gallery Opening', 'date' => '2023-10-10', 'category' => 'Arts', 'price' => 15.00, 'image' => 'https://source.unsplash.com/random/800x600?art', 'bookings' => 67],
            ['id' => 5, 'title' => 'Business Networking Lunch', 'date' => '2023-11-18', 'category' => 'Business', 'price' => 75.00, 'image' => 'https://source.unsplash.com/random/800x600?business', 'bookings' => 34],
            ['id' => 6, 'title' => 'Yoga & Wellness Retreat', 'date' => '2023-12-05', 'category' => 'Wellness', 'price' => 129.99, 'image' => 'https://source.unsplash.com/random/800x600?yoga', 'bookings' => 56],
        ] as $event)
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-orange-100 text-[#EB8317] text-sm rounded-full">{{ $event['category'] }}</span>
                        <div class="flex items-center gap-1 text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            <span class="text-sm">{{ $event['bookings'] }}</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $event['title'] }}</h3>
                    <div class="flex items-center text-gray-500 text-sm mb-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ date('M d, Y', strtotime($event['date'])) }}
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-[#EB8317]">${{ number_format($event['price'], 2) }}</span>
                        <div class="flex items-center gap-2">
                            <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                            <button class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6 flex justify-center">
        <nav class="flex items-center gap-2">
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-500 hover:bg-gray-50">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#EB8317] text-white">1</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white hover:bg-gray-50">2</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white hover:bg-gray-50">3</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-500 hover:bg-gray-50">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </nav>
    </div>
@endsection
