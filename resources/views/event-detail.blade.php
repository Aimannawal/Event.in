@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <img src="{{ asset('assets/example.jpg') }}" alt="Event Image"
                class="w-full h-96 object-cover rounded-lg shadow-lg mb-8">

            <h1 class="text-4xl font-bold mb-4">{{ $event->title }}</h1>

            <div class="flex items-center mb-6 text-gray-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span>Date : {{ $event->date }}</span>
            </div>

            <div class="flex items-center mb-6 text-gray-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Location: {{ $event->location }}</span>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-semibold mb-4">Deskripsi Acara</h2>
                <p class="text-gray-700 mb-4">
                    {{ $event->description }}
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-semibold mb-4">Informasi Tiket</h2>
                <div class="flex justify-between items-center mb-6">
                    <span class="text-lg">Harga Tiket</span>
                    <span class="text-[#EB8317] font-medium text-xl">Rp {{ $event->price }}</span>
                </div>
                <a href="#" class="block w-full bg-[#EB8317] text-white text-center px-6 py-3 rounded-full text-lg font-medium hover:bg-[#d67615] transition duration-300" id="openModal">Booking Tiket</a>
            </div>

            @if (Auth::check())
            <div id="paymentModal" class="modal hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
                <div class="modal-content bg-white p-6 rounded-lg w-96">
                    <div class="modal-header flex justify-between items-center mb-4">
                        <h5 class="modal-title text-xl font-semibold">Pilih Metode Pembayaran</h5>
                        <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
                    </div>
                    <div class="modal-body">
                        <!-- Form untuk Booking Tiket -->
                        <form action="{{ route('booking.store') }}" method="POST" id="bookingForm">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            
                            <!-- Pilihan Metode Pembayaran -->
                            <div class="flex items-center mb-4">
                                <input type="radio" id="gopay" name="payment_method_id" value="1" class="mr-4" required>
                                <img src="path-to-gopay-logo.png" alt="Gopay" class="h-8 w-8 mr-4">
                                <label for="gopay">Gopay</label>
                            </div>
            
                            <div class="flex items-center mb-4">
                                <input type="radio" id="dana" name="payment_method_id" value="2" class="mr-4" required>
                                <img src="path-to-dana-logo.png" alt="Dana" class="h-8 w-8 mr-4">
                                <label for="dana">Dana</label>
                            </div>
            
                            <div class="flex items-center mb-4">
                                <input type="radio" id="ovo" name="payment_method_id" value="3" class="mr-4" required>
                                <img src="path-to-ovo-logo.png" alt="OVO" class="h-8 w-8 mr-4">
                                <label for="ovo">OVO</label>
                            </div>
                    </div>
                    <div class="modal-footer flex justify-between items-center">
                        <button type="button" id="closeModalFooter" class="bg-gray-500 text-white py-2 px-4 rounded">Tutup</button>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Bayar</button>
                    </div>
                    </form>
                </div>
            </div>
        @else
            <script>
                window.location.href = "{{ route('login') }}";
            </script>
        @endif
        


            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4">Organizer Information</h2>
                <p class="text-gray-700 mb-2"><strong>Organizer:</strong> {{ $event->organizer }}</p>
                <p class="text-gray-700 mb-2"><strong>Email:</strong> {{ $event->email }}</p>
                <p class="text-gray-700 mb-4"><strong>Phone:</strong> {{ $event->phone }}</p>
                <a href="https://wa.me/{{ $event->phone }}" class="text-[#EB8317] hover:underline">Contact Organizer</a>
            </div>
        </div>
    </div>
    <script>
        // Mendapatkan elemen-elemen modal
        const openModalBtn = document.getElementById('openModal');
        const modal = document.getElementById('paymentModal');
        const closeModalBtns = document.querySelectorAll('#closeModal, #closeModalFooter');
    
        // Menampilkan modal saat tombol "Booking Tiket" diklik
        openModalBtn.addEventListener('click', function (e) {
            e.preventDefault();
            modal.style.display = 'flex'; // Menampilkan modal
        });
    
        // Menutup modal saat tombol close diklik
        closeModalBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                modal.style.display = 'none'; // Menyembunyikan modal
            });
        });
    
        // Menutup modal jika klik di luar modal-content
        window.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.style.display = 'none'; // Menyembunyikan modal jika klik di luar modal
            }
        });
    </script>
    
    <style>
        /* Styling untuk Modal */
        .modal {
            display: none; /* Modal disembunyikan secara default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
    
        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            width: 100%;
        }
    
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    
        .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    
        .modal-footer button {
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 4px;
        }
    
        #closeModal, #closeModalFooter {
            cursor: pointer;
            font-size: 24px;
            color: #888;
        }
    
        #closeModal:hover, #closeModalFooter:hover {
            color: #333;
        }
    </style>
    
    
@endsection
