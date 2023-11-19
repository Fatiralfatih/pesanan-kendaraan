<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $kendaran = ['sedan', 'pazero', 'lamborghini'];
        return [
            'nama_kendaraan' => fake()->word(),
            'konsumsi_bbm' => fake()->randomNumber(5),
            'jadwal_service' => fake()->date()
        ];
    }
}
