<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usaha>
 */
class UsahaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_usaha' => $this->faker->jobTitle(),
            'alamat_usaha' => $this->faker->address(),
            'lama_berdirinya_usaha' => $this->faker->word(),
            'nilai_pendanaan' => $this->faker->randomNumber(20, true),
            'sumber_pendanaan' => $this->faker->word(),
            'hambatan_usaha' => $this->faker->word(),
        ];
    }
}