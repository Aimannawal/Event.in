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
                <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
                    <div class="modal-header bg-gray-100 px-6 py-4 rounded-t-lg">
                        <h5 class="modal-title text-xl font-semibold text-gray-800">Pilih Metode Pembayaran</h5>
                        <button id="closeModal" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body p-6">
                        <form action="{{ route('booking.store') }}" method="POST" id="bookingForm">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            
                            <div class="space-y-4">
                                <label class="block p-4 border border-gray-200 rounded-lg hover:border-orange-500 transition-colors cursor-pointer">
                                    <div class="flex items-center">
                                        <input type="radio" id="gopay" name="payment_method_id" value="1" class="h-5 w-5 text-orange-600" required>
                                        <img src="/assets/gopay.png" alt="Gopay" class="h-8 w-8 mx-4 object-contain">
                                        <span class="text-lg font-medium text-gray-700">Gopay</span>
                                    </div>
                                </label>
            
                                <label class="block p-4 border border-gray-200 rounded-lg hover:border-orange-500 transition-colors cursor-pointer">
                                    <div class="flex items-center">
                                        <input type="radio" id="dana" name="payment_method_id" value="2" class="h-5 w-5 text-orange-600" required>
                                        <img src="/assets/dana.jpeg" alt="Dana" class="h-8 w-8 mx-4 object-contain">
                                        <span class="text-lg font-medium text-gray-700">Dana</span>
                                    </div>
                                </label>
            
                                <label class="block p-4 border border-gray-200 rounded-lg hover:border-orange-500 transition-colors cursor-pointer">
                                    <div class="flex items-center">
                                        <input type="radio" id="ovo" name="payment_method_id" value="3" class="h-5 w-5 text-orange-600" required>
                                        <img src="/assets/ovo.jpg" alt="OVO" class="h-8 w-8 mx-4 object-contain">
                                        <span class="text-lg font-medium text-gray-700">OVO</span>
                                    </div>
                                </label>
                            </div>
            
                            <div class="mt-8 flex justify-end space-x-4">
                                <button type="button" id="closeModalFooter" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition-colors focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50">
                                    Batal
                                </button>
                                <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition-colors focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                                    Lanjutkan Pembayaran
                                </button>
                            </div>
                        </form>
                    </div>
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
        const openModalBtn = document.getElementById('openModal');
        const modal = document.getElementById('paymentModal');
        const closeModalBtns = document.querySelectorAll('#closeModal, #closeModalFooter');

        openModalBtn.addEventListener('click', function (e) {
            e.preventDefault();
            modal.style.display = 'flex';
        });
    
        closeModalBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                modal.style.display = 'none';
            });
        });
    
        window.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>
    
    <style>
        .modal {
            display: none; 
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
