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
            'latitude' => '-7.747033', // -6.175392
            'longitude' => '110.355398',// 106.827153
            'radius_km' => '0.5',// 5
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

    }
}
