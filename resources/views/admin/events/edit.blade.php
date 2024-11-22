@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Edit Event</h1>
        <a href="{{ route('admin.events') }}" class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:ring-offset-2">
            Cancel
        </a>
    </div>

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200">
        @csrf
        @method('POST')
    
        <div class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Event Title</label>
                <input type="text" name="title" id="title" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="{{ old('title', $event->title) }}">
            </div>
            
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category_id" name="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $event->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
    
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]">{{ old('description', $event->description) }}</textarea>
            </div>
    
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" name="price" id="price" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="{{ old('price', $event->price) }}">
            </div>
    
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="date" id="date" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="{{ $event->date }}">
            </div>
    
            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" name="location" id="location" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="{{ old('location', $event->location) }}">
            </div>
    
            <div>
                <label for="organizer" class="block text-sm font-medium text-gray-700">Organizer</label>
                <input type="text" name="organizer" id="organizer" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="{{ old('organizer', $event->organizer) }}">
            </div>
    
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="{{ old('email', $event->email) }}">
            </div>
    
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="phone" id="phone" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="{{ old('phone', $event->phone) }}">
            </div>
    
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Event Image</label>
                <div class="mt-1 flex items-center">
                    @if ($event->image_url)
                        <img src="{{ Storage::url($event->image_url) }}" alt="{{ $event->title }}" class="w-12 h-12 rounded-md">
                    @endif
                    <input type="file" name="image" id="image" class="ml-5">
                </div>
            </div>
        </div>
    
        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-[#EB8317] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-[#d67615] focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:ring-offset-2">Update Event</button>
            </div>
        </div>
    </form>    
</div>
@endsection

