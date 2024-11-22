<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil semua seeder yang telah dibuat
        $this->call([
            CategorySeeder::class,
            PaymentMethodSeeder::class,
            EventSeeder::class,
            UserSeeder::class,
            BookingSeeder::class,
        ]);
    }
}