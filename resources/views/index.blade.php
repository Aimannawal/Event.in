@extends('layouts.app')

@section('content')
<div class="relative w-full h-[80vh] max-h-[80vh]">
    <div class="swiper-container w-full h-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative w-full h-full">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/event.jpg');"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">Temukan Acara Menakjubkan</h1>
                        <p class="text-xl mb-8">Bergabunglah dengan kami untuk pengalaman yang tak terlupakan</p>
                        <a href="/event"
                            class="bg-[#EB8317] text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-[#d67615] transition duration-300">Telusuri Event</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide relative w-full h-full">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/create.jpg');">
                </div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">Buat Acara Anda Sendiri</h1>
                        <p class="text-xl mb-8">Bagikan passionmu dengan dunia</p>
                        <a href="https://wa.me/+6281907674517"
                            class="bg-[#EB8317] text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-[#d67615] transition duration-300">Mulai Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide relative w-full h-full">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/mutual.jpg');">
                </div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">Terhubung dengan orang-orang sejalan</h1>
                        <p class="text-xl mb-8">Bangun jaringan Anda di acara-acara menarik</p>
                        <a href="/event"
                            class="bg-[#EB8317] text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-[#d67615] transition duration-300">Ayo Bergabung</a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="swiper-button-prev !hidden md:!flex !aspect-square !w-12 !h-12 !bg-white/80 !rounded-full !text-[#EB8317] hover:!bg-[#EB8317] hover:!text-white transition-all duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </div>
        <div
            class="swiper-button-next !hidden md:!flex !aspect-square !w-12 !h-12 !bg-white/80 !rounded-full !text-[#EB8317] hover:!bg-[#EB8317] hover:!text-white transition-all duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
        <div class="swiper-pagination !bottom-6"></div>
    </div>
</div>
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-semibold mb-8 text-center">kategori Terpopuler</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <a href="/category/1"
                class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                </svg>
                <h3 class="text-xl font-medium">Musik</h3>
            </a>
            <a href="/category/2"
                class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <h3 class="text-xl font-medium">Olahraga</h3>
            </a>
            <a href="/category/3"
                class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-xl font-medium">Seni</h3>
            </a>
            <a href="/category/4"
                class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                </svg>
                <h3 class="text-xl font-medium">Makanan</h3>
            </a>
            <a href="/category/5"
                class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <h3 class="text-xl font-medium">Teknologi</h3>
            </a>
            <a href="/category/6"
                class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-xl font-medium">Bisnis</h3>
            </a>
            <a href="/category/7"
                class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <h3 class="text-xl font-medium">Kesehatan</h3>
            </a>
            <a href="/category/8"
                class="bg-gray-100 rounded-lg p-6 text-center hover:bg-[#EB8317] hover:text-white transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <h3 class="text-xl font-medium">Edukasi</h3>
            </a>
        </div>
    </div>
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold mb-8 text-center">Acara Mendatang</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($event as $ev)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ Storage::url($ev->image_url) }}" alt="Event Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $ev->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $ev->description }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-[#EB8317] font-medium">{{ $ev->date }}</span>
                                <a href="{{ route('events.detail', $ev->id) }}"
                                    class="bg-[#EB8317] text-white px-4 py-2 rounded-full hover:bg-[#d67615] transition duration-300">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="/event" class="text-[#EB8317] font-medium hover:underline">Lihat Semua Acara</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-semibold mb-8 text-center">Pertanyaan yang Sering Diajukan</h2>

            <div class="mb-4 border-b border-gray-200">
                <button
                    class="flex items-center justify-between w-full py-4 text-left transition-colors duration-200 hover:bg-gray-50"
                    onclick="toggleFAQ(this)">
                    <span class="text-lg font-medium">Bagaimana cara menemukan event di sekitar saya?</span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform duration-200 ease-in-out" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-200 max-h-0 opacity-0">
                    <p class="text-gray-600 p-4">Gunakan fitur pencarian di halaman utama dan aktifkan lokasi Anda. Sistem
                        kami akan menampilkan event-event terdekat berdasarkan lokasi Anda saat ini.</p>
                </div>
            </div>

            <div class="mb-4 border-b border-gray-200">
                <button
                    class="flex items-center justify-between w-full py-4 text-left transition-colors duration-200 hover:bg-gray-50"
                    onclick="toggleFAQ(this)">
                    <span class="text-lg font-medium">Jenis event apa saja yang bisa saya selenggarakan?</span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform duration-200 ease-in-out" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-200 max-h-0 opacity-0">
                    <p class="text-gray-600 p-4">Anda dapat menyelenggarakan berbagai jenis event seperti konser, seminar,
                        workshop, pameran, pertunjukan seni, acara olahraga, dan berbagai event lainnya sesuai dengan
                        ketentuan yang berlaku.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#EB8317] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-semibold mb-4">Siap Membuat Acara Anda Sendiri?</h2>
                <p class="text-xl mb-8">Bergabunglah dengan Event.in dan mulailah merencanakan acara sukses Anda berikutnya
                    hari ini!</p>
                <a href="https://wa.me/+6281907674517"
                    class="bg-white text-[#EB8317] px-8 py-3 rounded-full text-lg font-medium hover:bg-gray-100 transition duration-300 inline-block">Kontak Kami</a>
            </div>
        </div>
    </div>
@endsection
