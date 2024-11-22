<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event.in</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-poppins">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="fixed inset-y-0 z-50 flex w-72 flex-col">
            <div class="flex flex-1 flex-col bg-white px-4 py-6 shadow-lg">
                <div class="mb-8">
                    <a href="/" class="flex items-center gap-2 text-2xl font-bold text-[#EB8317]">
                        Event.in
                        <span class="rounded-md bg-[#EB8317]/10 px-2 py-1 text-xs font-medium">{{ Auth::user()->name }}</span>
                    </a>
                </div>
                
                <nav class="flex-1 space-y-2">
                    <div class="mb-4">
                        <p class="px-2 text-xs font-semibold uppercase tracking-wider text-gray-400">Menu</p>
                    </div>
                    
                    <a href="{{ route('user.dashboard') }}" 
                       class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-600 transition-all hover:bg-[#EB8317]/10 hover:text-[#EB8317] {{ request()->routeIs('user.dashboard') ? 'bg-[#EB8317]/10 text-[#EB8317]' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>
                        <span class="font-medium">Overview</span>
                    </a>

                    <a href="{{ route('user.bookings') }}" 
                       class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-600 transition-all hover:bg-[#EB8317]/10 hover:text-[#EB8317] {{ request()->routeIs('user.bookings') ? 'bg-[#EB8317]/10 text-[#EB8317]' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                        <span class="font-medium">Bookings</span>
                    </a>
                </nav>

                <div class="mt-auto border-t pt-4">
                    <div class="mb-2">
                        <p class="px-2 text-xs font-semibold uppercase tracking-wider text-gray-400">Account</p>
                    </div>
                    <a href="{{ route('logout') }}" 
                       class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-600 transition-all hover:bg-red-50 hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                        <span class="font-medium">Logout</span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="ml-72 flex-1 px-8 py-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
