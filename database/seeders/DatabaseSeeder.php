<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\kendaraan;
use App\Models\Profil;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->count(3)->sequence(
            [   
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => '12345',
            ],
            [   
                'nama' => 'fatir',
                'email' => 'fatir@gmail.com',
                'role' => 'atasan',
                'password' => '12345',
            ],
            [
                'nama' => 'alfatih',
                'email' => 'alfatih@gmail.com',
                'role' => 'atasan',
                'password' => '12345',
            ],
        )->create();

        kendaraan::factory()->count(20)->sequence(
            ['nama_kendaraan' => 'sedan'],
            ['nama_kendaraan' => 'lambhorgini'],
            ['nama_kendaraan' => 'dada'],
        )->create();

        Profil::factory()->count(3)->sequence(
            ['user_id' => 1],
            ['user_id' => 2],
            ['user_id' => 3]
        )->create();
    }
}
