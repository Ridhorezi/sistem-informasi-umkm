<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemilik>
 */
class PemilikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_pemilik' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->gender(),
            'alamat_pemilik' => $this->faker->address(),
            'kota_pemilik' => $this->faker->city()
        ];
    }
}