<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lamasewa>
 */
class LamasewaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namasewa' => $this->faker->word(),  // Nama Sewa Harian
            'durasi' => $this->faker->numberBetween(1, 30),  // Durasi sewa dalam hari
            'keterangan' => $this->faker->sentence(),  // Keterangan tambahan
        ];
    }
}
