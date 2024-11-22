@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Edit Event</h1>
        <a href="{{ route('admin.events') }}" class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:ring-offset-2">
            Cancel
        </a>
    </div>

    <form action="#" method="POST" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Event Title</label>
                <div class="mt-1">
                    <input type="text" name="title" id="title" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="Summer Music Festival">
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <div class="mt-1">
                    <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]">Join us for an unforgettable night of music featuring top artists and emerging talents.</textarea>
                </div>
            </div>

            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category" name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]">
                    <option selected>Music</option>
                    <option>Sports</option>
                    <option>Arts</option>
                    <option>Food</option>
                    <option>Technology</option>
                </select>
            </div>

            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Event Date</label>
                <div class="mt-1">
                    <input type="date" name="date" id="date" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="2023-07-15">
                </div>
            </div>

            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <div class="mt-1">
                    <input type="text" name="location" id="location" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="Central Park, New York">
                </div>
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">$</span>
                    </div>
                    <input type="text" name="price" id="price" class="block w-full rounded-md border-gray-300 pl-7 shadow-sm focus:border-[#EB8317] focus:ring-[#EB8317]" value="49.99">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Event Image</label>
                <div class="mt-1 flex items-center">
                    <span class="inline-block h-12 w-12 overflow-hidden bg-gray-100">
                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>
                    <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#EB8317]">
                        Change
                    </button>
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

