@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <img src="{{ asset('assets/example.jpg') }}" alt="Event Image" class="w-full h-96 object-cover rounded-lg shadow-lg mb-8">
        
        <h1 class="text-4xl font-bold mb-4">Event Title</h1>
        
        <div class="flex items-center mb-6 text-gray-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span>Date: May 15, 2023 | 7:00 PM</span>
        </div>
        
        <div class="flex items-center mb-6 text-gray-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span>Location: Event Venue, City</span>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold mb-4">Event Description</h2>
            <p class="text-gray-700 mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p class="text-gray-700 mb-4">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold mb-4">Ticket Information</h2>
            <div class="flex justify-between items-center mb-4">
                <span class="text-lg">General Admission</span>
                <span class="text-[#EB8317] font-medium text-xl">$49.99</span>
            </div>
            <div class="flex justify-between items-center mb-6">
                <span class="text-lg">VIP Package</span>
                <span class="text-[#EB8317] font-medium text-xl">$99.99</span>
            </div>
            <a href="#" class="block w-full bg-[#EB8317] text-white text-center px-6 py-3 rounded-full text-lg font-medium hover:bg-[#d67615] transition duration-300">Book Tickets</a>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Organizer Information</h2>
            <p class="text-gray-700 mb-2"><strong>Organizer:</strong> Event Planning Co.</p>
            <p class="text-gray-700 mb-2"><strong>Email:</strong> info@eventplanningco.com</p>
            <p class="text-gray-700 mb-4"><strong>Phone:</strong> (123) 456-7890</p>
            <a href="#" class="text-[#EB8317] hover:underline">Contact Organizer</a>
        </div>
    </div>
</div>
@endsection
