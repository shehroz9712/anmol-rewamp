<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Admin::create([
            'first_name' => 'Super',
            'last_name' => ' Admin',
            'email' => 'Super_admin@example.com',
            'image' => 'logo.png',
            'phone' => '1234546',
            'password' => Hash::make('password')
        ]);
    }
}
