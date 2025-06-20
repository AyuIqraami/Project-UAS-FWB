<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        Destination::create([
            'name' => 'Pantai Dato',
            'location' => 'Majene',
            'description' => 'Pantai Dato adalah destinasi wisata andalan Majene dengan pasir putih dan tebing eksotis.',
            'image' => 'destinations/dato.jpg', // pastikan file ini ada di storage
        ]);
    }
}
