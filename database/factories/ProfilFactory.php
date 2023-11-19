<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profil>
 */
class ProfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        return [
            'nama_lengkap' => fake()->name(),
            'alamat' => fake()->streetAddress(),
            'no_hp' => fake()->numerify('+62' . '########'),
            'tgl_lahir' => fake()->date('d-m-Y')
        ];
    }
}
