<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event.in</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    {{-- <link rel="icon" href="assets/logo.png"> --}}
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: white;
            background-color: rgba(235, 131, 23, 0.7);
            padding: 30px 20px;
            border-radius: 50%;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px;
        }

        .swiper-pagination-bullet {
            background-color: white;
            opacity: 0.7;
        }

        .swiper-pagination-bullet-active {
            background-color: #EB8317;
            opacity: 1;
        }
    </style>
</head>

<body class="bg-white font-poppins">
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-[#EB8317]">Event.in</a>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <form action="{{ route('search') }}" method="GET">
                        <input type="text" name="q" placeholder="Search events..."
                            class="pl-8 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#EB8317] focus:border-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </form>                    
                </div>                

                @if(auth()->check())
                    <a href="{{ auth()->user()->role === 'admin' ? '/admin' : '/user' }}" class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">
                        Dashboard
                    </a>
                @else
                    <a href="/login" class="text-[#EB8317] hover:text-[#d67615] font-medium">Login</a>
                    <a href="/register" class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">Sign Up</a>
                @endif
            </div>
        </div>
    </nav>
</body>


    <main class="pt-16">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Event.in</h3>
                    <p class="text-gray-400">Temukan dan ciptakan acara yang tak terlupakan dengan Event.in</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Browse Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Create Event</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6"
                                fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6"
                                fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6"
                                fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p class="text-gray-400">&copy; 2024 Event.in. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const svg = button.querySelector('svg');
            const allContents = document.querySelectorAll('.faq-content');
            const allSvgs = document.querySelectorAll('svg');

            allContents.forEach(item => {
                if (item !== content) {
                    item.style.maxHeight = '0px';
                    item.style.opacity = '0';
                }
            });

            allSvgs.forEach(item => {
                if (item !== svg) {
                    item.style.transform = 'rotate(0deg)';
                }
            });

            if (content.style.maxHeight === '0px' || content.style.maxHeight === '') {
                content.style.maxHeight = content.scrollHeight + 'px';
                content.style.opacity = '1';
                svg.style.transform = 'rotate(180deg)';
            } else {
                content.style.maxHeight = '0px';
                content.style.opacity = '0';
                svg.style.transform = 'rotate(0deg)';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const contents = document.querySelectorAll('.faq-content');
            contents.forEach(content => {
                content.style.maxHeight = '0px';
                content.style.opacity = '0';
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
    <style>
        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: rgba(255, 255, 255, 0.6);
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background: #EB8317;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            display: none;
        }

        .swiper-button-next,
        .swiper-button-prev {
            top: 50% !important;
            transform: translateY(-50%) !important;
        }

        .overflow-hidden {
            transition: max-height 200ms ease-out, opacity 200ms ease-out;
        }

        button:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }
    </style>
</body>

</html>
