@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8 text-center">
        Search Results for
        <span class="text-[#EB8317]">"{{ $search }}"</span>
    </h1>
    
    <div class="mb-8">
        <form action="{{ route('search') }}" method="GET" class="flex justify-center">
            <input 
                type="text" 
                name="q" 
                value="{{ $search }}" 
                placeholder="Search events..." 
                class="px-4 py-2 w-full max-w-md rounded-l-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:border-transparent">
            <button 
                type="submit" 
                class="bg-[#EB8317] text-white px-6 py-2 rounded-r-full hover:bg-[#d67615] transition duration-300">
                Search
            </button>
        </form>
    </div>

    @if ($events->count())
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($events as $event)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img 
                        src="{{ $event->image ?? 'https://source.unsplash.com/random/800x400?event&sig=' . $loop->index }}" 
                        alt="Event Image" 
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $event->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($event->description, 100, '...') }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-[#EB8317] font-medium">
                                Rp. {{ $event->price }}
                            </span>
                            <a 
                                href="{{ route('events.detail', ['id' => $event->id]) }}" 
                                class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            {{ $events->links() }}
        </div>
    @else
        <p class="text-center text-gray-500">No results found for "{{ $search }}".</p>
    @endif
</div>
@endsection
