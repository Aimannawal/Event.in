@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Create New Event</h1>
        <a href="{{ route('admin.events') }}" class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:ring-offset-2">
            Cancel
        </a>
    </div>

    <form action="#" method="POST" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Event Title</label>
                <div class="mt-1">
                    <input type="text" name="title" id="title" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter event title">
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <div class="mt-1">
                    <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter event description"></textarea>
                </div>
            </div>

            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category" name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]">
                    <option>Music</option>
                    <option>Sports</option>
                    <option>Arts</option>
                    <option>Food</option>
                    <option>Technology</option>
                </select>
            </div>

            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Event Date</label>
                <div class="mt-1">
                    <input type="date" name="date" id="date" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]">
                </div>
            </div>

            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <div class="mt-1">
                    <input type="text" name="location" id="location" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="Enter event location">
                </div>
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">$</span>
                    </div>
                    <input type="text" name="price" id="price" class="block w-full rounded-md border-gray-300 pl-7 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" placeholder="0.00">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Event Image</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-[#EB8317] hover:text-[#d67615] focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-[#EB8317]">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-[#EB8317] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-[#d67615] focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:ring-offset-2">Create Event</button>
            </div>
        </div>
    </form>
</div>
@endsection

