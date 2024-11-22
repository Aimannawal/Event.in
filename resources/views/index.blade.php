@extends('layouts.app')

@section('content')
<div class="swiper-container h-[70vh]">
    <div class="swiper-wrapper">
        <div class="swiper-slide bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/1920x1080?concert');">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-center text-white">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Discover Amazing Events</h1>
                    <p class="text-xl mb-8">Join us for unforgettable experiences</p>
                    <a href="#" class="bg-[#EB8317] text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-[#d67615] transition duration-300">Explore Events</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/1920x1080?festival');">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-center text-white">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Create Your Own Event</h1>
                    <p class="text-xl mb-8">Share your passion with the world</p>
                    <a href="#" class="bg-[#EB8317] text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-[#d67615] transition duration-300">Start Planning</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/1920x1080?party');">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-center text-white">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Connect with Like-minded People</h1>
                    <p class="text-xl mb-8">Build your network at exciting events</p>
                    <a href="#" class="bg-[#EB8317] text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-[#d67615] transition duration-300">Join Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<div class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-semibold mb-8 text-center">Popular Categories</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach(['Music', 'Sports', 'Arts', 'Food', 'Technology', 'Business', 'Lifestyle', 'Education'] as $category)
            <a href="#" class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <h3 class="text-xl font-medium">{{ $category }}</h3>
            </a>
        @endforeach
    </div>
</div>

<div class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-8 text-center">Upcoming Events</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @for ($i = 1; $i <= 6; $i++)
                <div class="bg-white rounded-lg shadow-md overflow-hidden flex">
                    <img src="https://source.unsplash.com/random/400x300?event" alt="Event Image" class="w-1/3 object-cover">
                    <div class="p-6 w-2/3">
                        <h3 class="text-xl font-semibold mb-2">Event Title {{ $i }}</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-[#EB8317] font-medium">$49.99</span>
                            <a href="#" class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">Book Now</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="text-center mt-8">
            <a href="#" class="text-[#EB8317] font-medium hover:underline">View All Events</a>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-semibold mb-8 text-center">Frequently Asked Questions</h2>
        @foreach(['How do I create an event?', 'Can I sell tickets through Event.in?', 'How do I find events near me?', 'What types of events can I host?'] as $question)
            <div class="mb-4 border-b border-gray-200">
                <button class="flex items-center justify-between w-full py-4 text-left" onclick="toggleFAQ(this)">
                    <span class="text-lg font-medium">{{ $question }}</span>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden pb-4">
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="bg-[#EB8317] text-white py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">Ready to Create Your Own Event?</h2>
            <p class="text-xl mb-8">Join Event.in and start planning your next successful event today!</p>
            <a href="#" class="bg-white text-[#EB8317] px-8 py-3 rounded-full text-lg font-medium hover:bg-gray-100 transition duration-300 inline-block">Contact Us</a>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-4">Join the Event.in Community</h2>
        <p class="text-xl text-gray-600 mb-8">Don't miss out on the latest events and exclusive offers. Sign up now!</p>
        <form class="flex flex-col sm:flex-row gap-4 justify-center">
            <input type="email" placeholder="Enter your email" class="px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-[#EB8317] flex-grow max-w-md">
            <button type="submit" class="bg-[#EB8317] text-white px-6 py-2 rounded-full hover:bg-[#d67615] transition duration-300">Subscribe</button>
        </form>
    </div>
</div>

<script>
    function toggleFAQ(element) {
        const content = element.nextElementSibling;
        content.classList.toggle('hidden');
        const icon = element.querySelector('svg');
        icon.classList.toggle('rotate-180');
    }
</script>
@endsection

