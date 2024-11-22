@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8 text-center">Events in Music</h1>

    <div class="mb-8">
        <div class="flex flex-wrap justify-center gap-4">
            @foreach(['All', 'Music', 'Sports', 'Arts', 'Food', 'Technology', 'Business', 'Lifestyle', 'Education'] as $category)
                <a href="#" class="bg-gray-100 hover:bg-[#EB8317] hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300 {{ $category == 'Music' ? 'bg-[#EB8317] text-[#EB8317]' : 'hover:text-white' }}">
                    {{ $category }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @for ($i = 1; $i <= 9; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/random/800x600?music&sig={{ $i }}" alt="Event Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Music Event {{ $i }}</h3>
                    <p class="text-gray-600 mb-4">Join us for an unforgettable night of music featuring top artists and emerging talents.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[#EB8317] font-medium">${{ number_format(rand(2000, 10000) / 100, 2) }}</span>
                        <a href="#" class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">View Details</a>
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

