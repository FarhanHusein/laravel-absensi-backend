<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Husein Admin',
            'email' => 'farhanhuseinabdurrahim@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // data dummy for company
        \App\Models\Company::create([
            'name' => 'Husein',
            'email' => 'farhanhuseinabdurrahim@gmail.com',
            'address' => 'Jl. Cempaka Putih No. 5, Kec. Cempaka Putih, Jakarta Pusat',
            'latitude' => '-6.175392', // -7.747033
            'longitude' => '106.827153',// 110.355398
            'radius_km' => '5',// 0.5
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
