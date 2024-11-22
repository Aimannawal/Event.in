@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8 text-center">Event di "{{ $category->name }}"</h1>

    <div class="mb-8">
        <div class="flex flex-wrap justify-center gap-4">
            @foreach($allCategories as $cat)
                <a href="{{ route('category.events', $cat->id) }}" 
                   class="bg-gray-100 hover:bg-[#EB8317] hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300 
                          {{ $cat->id == $category->id ? 'bg-[#EB8317] text-[#EB8317]' : 'text-gray-700' }}">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse ($events as $event)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ Storage::url($event->image_url) }}" 
                     alt="Event Image" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $event->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($event->description, 100, '...') }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[#EB8317] font-medium">Rp. {{ $event->price }}</span>
                        <a href="{{ route('events.detail', $event->id) }}" 
                           class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">No events available in this category.</p>
        @endforelse
    </div>

    <div class="mt-12 flex justify-center">
        {{ $events->links() }}
    </div>
</div>
@endsection
