<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin1',
            'email' => 'admin@ExploreSulbar.com',
            'password' => Hash::make('pass'), // kamu bisa ganti
            'role' => 'Admin',
        ]);
    }
}
