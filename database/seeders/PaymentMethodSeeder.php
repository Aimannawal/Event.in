<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    public function run()
    {
        PaymentMethod::create([
            'name' => 'GoPay',
            'image_url' => 'url_to_gopay_logo.png',
        ]);
        PaymentMethod::create([
            'name' => 'Dana',
            'image_url' => 'url_to_dana_logo.png',
        ]);
        PaymentMethod::create([
            'name' => 'OVO',
            'image_url' => 'url_to_ovo_logo.png',
        ]);
        PaymentMethod::create([
            'name' => 'Bank Transfer',
            'image_url' => 'url_to_bank_transfer_logo.png',
        ]);
    }
}
