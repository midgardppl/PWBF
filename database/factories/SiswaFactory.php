<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NISN' => fake()->name(),
            'namaSiswa' => fake()->name(),
            'password' => fake()->name(),
            'tglLahir' => fake()->name(),
            'alamatSiswa' => fake()->name(),
            'j_kelSiswa' => fake()->name(),
            'no_telpSiswa' => fake()->name(),
            'email' => fake()->name(),
            'statusSiswa' =>fake()->name()
        ];
    }
}
