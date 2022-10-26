<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NIP' => fake()->name(),
            'nama' => fake()->name(),
            'alamat' => fake()->name(),
            'j_kel' => fake()->name(),
            'no_telp' => fake()->name(),
            'email' =>fake()->name()
        ];
    }
}
