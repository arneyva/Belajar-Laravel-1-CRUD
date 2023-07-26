<?php

namespace Database\Factories;
use App\Models\siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class SiswaFactory extends Factory
{
    protected $model = siswa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // return [
        //     //
            
        //     // 'nama' => $this->faker->name(),
        //     // 'alamat' => $this->faker->streetAddress(),
        //     // 'nomor_hp' =>$this->faker->phoneNumber()
            
            
        // ];

        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->streetAddress(),
            'kota' => $this->faker->city(),
            'provinsi' => $this->faker->state(),
            'email' => $this->faker->email(),
        ];
    }
}
