@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Create New Event</h1>
        <a href="{{ route('admin.events') }}" class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:ring-offset-2">
            Cancel
        </a>
    </div>

    <!-- Form Create Event -->
    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200">
        @csrf
        <div class="space-y-6">
            <!-- Event Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Event Title</label>
                <div class="mt-1">
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter event title">
                    @error('title')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <div class="mt-1">
                    <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter event description">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Category -->
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category_id" name="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Event Date -->
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Event Date</label>
                <div class="mt-1">
                    <input type="date" name="date" id="date" value="{{ old('date') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]">
                    @error('date')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Location -->
            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <div class="mt-1">
                    <input type="text" name="location" id="location" value="{{ old('location') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter event location">
                    @error('location')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Price -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input type="text" name="price" id="price" value="{{ old('price') }}" class="block w-full rounded-md border-gray-300 pl-7 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" >
                    @error('price')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Organizer -->
            <div>
                <label for="organizer" class="block text-sm font-medium text-gray-700">Organizer</label>
                <div class="mt-1">
                    <input type="text" name="organizer" id="organizer" value="{{ old('organizer') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter organizer's name">
                    @error('organizer')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="mt-1">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter organizer's email">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <div class="mt-1">
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter organizer's phone number">
                    @error('phone')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Event Image -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Event Image</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="image_url" class="relative cursor-pointer bg-white rounded-md font-medium text-[#EB8317] hover:text-[#d67615] focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-[#EB8317]">
                                <span>Upload a file</span>
                                <input id="image_url" name="image_url" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
                @error('image_url')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-[#EB8317] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-[#d67615] focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:ring-offset-2">
                    Create Event
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
