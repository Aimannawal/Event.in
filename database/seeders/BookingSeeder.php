<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Event;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run()
    {
        Booking::create([
            'event_id' => 1,
            'payment_method_id' => 2,
            'user_id' => 1,
        ]);

        Booking::create([
            'event_id' => 1,
            'payment_method_id' => 2,
            'user_id' => 1,
        ]);
    }
}
