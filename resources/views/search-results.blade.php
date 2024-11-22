@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8 text-center">
        Search Results for
        <span class="text-[#EB8317]">"{{ $searchQuery }}"</span>
    </h1>
    
    <div class="mb-8">
        <form action="{{ route('search') }}" method="GET" class="flex justify-center">
            <input type="text" name="q" value="{{ $searchQuery }}" placeholder="Search events..." class="px-4 py-2 w-full max-w-md rounded-l-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:border-transparent">
            <button type="submit" class="bg-[#EB8317] text-white px-6 py-2 rounded-r-full hover:bg-[#d67615] transition duration-300">Search</button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @for ($i = 1; $i <= 9; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/random/800x400?event&sig={{ $i }}" alt="Event Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Search Result {{ $i }}</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[#EB8317] font-medium">$49.99</span>
                        <a href="{{ route('event.detail', ['id' => $i]) }}" class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">View Details</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="mt-12 flex justify-center">
        <nav class="inline-flex rounded-md shadow">
            <a href="#" class="px-4 py-2 rounded-l-md bg-white text-gray-500 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317]">
                Previous
            </a>
            <a href="#" class="px-4 py-2 bg-white text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317]">
                1
            </a>
            <a href="#" class="px-4 py-2 bg-white text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317]">
                2
            </a>
            <a href="#" class="px-4 py-2 bg-white text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317]">
                3
            </a>
            <a href="#" class="px-4 py-2 rounded-r-md bg-white text-gray-500 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317]">
                Next
            </a>
        </nav>
    </div>
</div>
@endsection

