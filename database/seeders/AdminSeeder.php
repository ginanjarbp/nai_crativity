<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name'=> 'ginanjar bp',
            'email' => 'admin@example.com', // Gantilah email sesuai keinginan
            'password' => Hash::make('password123'), // Gantilah "password123" dengan password yang Anda inginkan
        ]);
    }
}
