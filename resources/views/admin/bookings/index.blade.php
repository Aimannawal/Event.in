@extends('layouts.admin')

@section('content')
<div class="space-y-8">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Bookings</h1>
        <div class="flex items-center gap-4">
            <div class="rounded-lg bg-white px-4 py-2 shadow-sm">
                <p class="text-sm font-medium text-gray-500">Total Revenue</p>
                <p class="text-2xl font-bold text-[#EB8317]">$15,750.00</p>
            </div>
            <div class="rounded-lg bg-white px-4 py-2 shadow-sm">
                <p class="text-sm font-medium text-gray-500">Total Bookings</p>
                <p class="text-2xl font-bold text-[#EB8317]">150</p>
            </div>
        </div>
    </div>

    <div class="rounded-xl bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b bg-gray-50/50">
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-500">Booking ID</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-500">Event</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-500">User</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-500">Date</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-500">Amount</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-500">Status</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach([
                        ['id' => 1, 'event' => 'Summer Music Festival', 'user' => 'John Doe', 'date' => '2023-06-15', 'amount' => 49.99, 'status' => 'confirmed'],
                        ['id' => 2, 'event' => 'Tech Conference 2023', 'user' => 'Jane Smith', 'date' => '2023-06-18', 'amount' => 199.99, 'status' => 'pending'],
                        ['id' => 3, 'event' => 'Food & Wine Expo', 'user' => 'Mike Johnson', 'date' => '2023-06-20', 'amount' => 29.99, 'status' => 'confirmed'],
                        ['id' => 4, 'event' => 'Art Gallery Opening', 'user' => 'Emily Brown', 'date' => '2023-06-22', 'amount' => 15.00, 'status' => 'confirmed'],
                        ['id' => 5, 'event' => 'Business Networking Lunch', 'user' => 'David Lee', 'date' => '2023-06-25', 'amount' => 75.00, 'status' => 'pending'],
                    ] as $booking)
                        <tr class="group">
                            <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-600">
                                #{{ str_pad($booking['id'], 5, '0', STR_PAD_LEFT) }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="h-10 w-10 rounded-lg bg-[#EB8317]/10"></div>
                                    <div>
                                        <p class="font-medium text-gray-900">{{ $booking['event'] }}</p>
                                        <p class="text-xs text-gray-500">{{ date('M d, Y', strtotime($booking['date'])) }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-600">{{ $booking['user'] }}</td>
                            <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-600">{{ date('M d, Y', strtotime($booking['date'])) }}</td>
                            <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-900">${{ number_format($booking['amount'], 2) }}</td>
                            <td class="whitespace-nowrap px-4 py-4">
                                <span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium {{ $booking['status'] === 'confirmed' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                                    {{ ucfirst($booking['status']) }}
                                </span>
                            </td>
                            <td class="whitespace-nowrap px-4 py-4">
                                <a href="#" class="text-sm font-medium text-[#EB8317] hover:underline">View Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="border-t px-4 py-4">
            <nav class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-500">Showing 1 to 5 of 50 results</span>
                </div>
                <div class="flex items-center gap-2">
                    <a href="#" class="rounded-lg border px-3 py-1 text-sm font-medium text-gray-500 hover:border-[#EB8317] hover:text-[#EB8317]">Previous</a>
                    <a href="#" class="rounded-lg border bg-[#EB8317] px-3 py-1 text-sm font-medium text-white">1</a>
                    <a href="#" class="rounded-lg border px-3 py-1 text-sm font-medium text-gray-500 hover:border-[#EB8317] hover:text-[#EB8317]">2</a>
                    <a href="#" class="rounded-lg border px-3 py-1 text-sm font-medium text-gray-500 hover:border-[#EB8317] hover:text-[#EB8317]">3</a>
                    <a href="#" class="rounded-lg border px-3 py-1 text-sm font-medium text-gray-500 hover:border-[#EB8317] hover:text-[#EB8317]">Next</a>
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection

