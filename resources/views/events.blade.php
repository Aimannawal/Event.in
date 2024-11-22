@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8 text-center">All Events</h1>

    <div class="mb-8">
        <form class="flex items-center justify-center">
            <input type="text" placeholder="Search events..." class="px-4 py-2 w-full max-w-md rounded-l-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:border-transparent">
            <button type="submit" class="bg-[#EB8317] text-white px-6 py-2 rounded-r-full hover:bg-[#d67615] transition duration-300">Search</button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($event as $ev)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="assets/example.jpg" alt="Event Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $ev->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $ev->description }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[#EB8317] font-medium">Rp. {{ $ev->price }}</span>
                        <a href="{{ route('events.detail', $ev->id) }}" class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-12 flex justify-center">
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
            @if ($event->onFirstPage())
                <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            @else
                <a href="{{ $event->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            @endif
    
            @foreach ($event->links()->elements[0] as $page => $url)
                @if ($page == $event->currentPage())
                    <a href="#" aria-current="page" class="z-10 bg-[#EB8317] border-[#EB8317] text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $page }} </a>
                @else
                    <a href="{{ $url }}" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $page }} </a>
                @endif
            @endforeach
    
            @if ($event->hasMorePages())
                <a href="{{ $event->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            @else
                <span class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            @endif
        </nav>
    </div>
    
</div>
@endsection

