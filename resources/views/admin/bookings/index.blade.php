@extends('layouts.admin')

@section('content')
<div class="space-y-8">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Bookings</h1>
        <div class="flex items-center gap-4">
            <div class="rounded-lg bg-white px-4 py-2 shadow-sm">
                <p class="text-sm font-medium text-gray-500">Total Bookings</p>
                <p class="text-2xl font-bold text-[#EB8317]">{{ $bookings->count() }}</p>
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
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-500">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach($bookings as $booking)
                        <tr class="group">
                            <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-600">
                                #{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-4">
                                <div class="flex items-center gap-3">
                                    <div>
                                        <p class="font-medium text-gray-900">{{ $booking->event->title ?? 'N/A' }}</p>
                                        <p class="text-xs text-gray-500">{{ optional($booking->event)->date ? date('M d, Y', strtotime($booking->event->date)) : '-' }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-600">{{ $booking->user->name ?? 'N/A' }}</td>
                            <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-600">{{ $booking->created_at->format('M d, Y') }}</td>
                            <td class="whitespace-nowrap px-4 py-4">
                                <span class="inline-flex items-center rounded-full px-2 py-1 text-xs font-medium {{ $booking->status === 'confirmed' ? 'bg-green-100 text-green-700' : 'bg-green-100 text-green-700' }}">
                                    confirmed
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="border-t px-4 py-4">
            <nav class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-500">Showing {{ $bookings->count() }} results</span>
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection
