@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div class="bg-white shadow-lg rounded-xl p-10">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-gray-800">
                    Create Your Account
                </h2>
                <p class="mt-2 text-sm text-gray-500">
                    Join <span class="text-[#EB8317] font-semibold">Event.in</span> and start exploring amazing events
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="space-y-4">
                    <input type="hidden" name="role" value="user">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input id="name" name="name" type="text" autocomplete="name" required 
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 text-gray-800 focus:outline-none focus:ring-[#EB8317] focus:border-[#EB8317] sm:text-sm" 
                            placeholder="Your Full Name">
                    </div>
                    <div>
                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required 
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 text-gray-800 focus:outline-none focus:ring-[#EB8317] focus:border-[#EB8317] sm:text-sm" 
                            placeholder="you@example.com">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" required 
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 text-gray-800 focus:outline-none focus:ring-[#EB8317] focus:border-[#EB8317] sm:text-sm" 
                            placeholder="Password">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required 
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 text-gray-800 focus:outline-none focus:ring-[#EB8317] focus:border-[#EB8317] sm:text-sm" 
                            placeholder="Confirm Password">
                    </div>
                </div>
                <div>
                    <button type="submit" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-[#EB8317] to-[#d67615] hover:to-[#e56b0f] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#EB8317] shadow-lg transform hover:scale-105 transition-all duration-200">w
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
        <p class="mt-6 text-center text-sm text-gray-500">
            Already have an account? 
            <a href="{{ route('login') }}" class="font-medium text-[#EB8317] hover:text-[#d67615]">
                Sign In
            </a>
        </p>
    </div>
</div>
@endsection
