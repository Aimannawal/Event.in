<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Ambil kategori pertama untuk acuan
        $category = Category::first();

        Event::create([
            'title' => 'Konser Musik Rock',
            'description' => 'Acara konser musik rock terbesar di kota ini.',
            'image_url' => 'url_to_image_rock_concert.jpg',
            'price' => '15.000',
            'date' => 'May 15, 2023 | 7:00 PM',
            'location' => 'Stadion Utama',
            'category_id' => 2,
            'organizer' => 'Event Organizer 1',
            'email' => 'contact@organizer1.com',
            'phone' => '081234567890',
        ]);

        Event::create([
            'title' => 'Seminar Teknologi',
            'description' => 'Seminar tentang perkembangan teknologi terbaru.',
            'image_url' => 'url_to_image_seminar_tech.jpg',
            'price' => '30.000',
            'date' => 'May 20, 2023 | 10:00 AM',
            'location' => 'Hotel Grand Palace',
            'category_id' => 1,
            'organizer' => 'Tech Event Co.',
            'email' => 'info@techeventco.com',
            'phone' => '082345678901',
        ]);
    }
}
