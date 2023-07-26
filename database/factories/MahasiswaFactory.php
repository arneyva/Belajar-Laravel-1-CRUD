<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


// sepertinya sambungane disini
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // menetukan format data dummy
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->streetAddress(),
            'kota' => $this->faker->city(),
            'provinsi' => $this->faker->state(),
            'email' => $this->faker->email(),
        ];
    }
}
