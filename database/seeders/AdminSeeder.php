<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin1',
            'email' => 'admin@ExploreSulbar.com',
            'password' => Hash::make('pass'), 
            'role' => 'Admin',
        ]);
    }
}
