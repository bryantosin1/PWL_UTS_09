<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bayi>
 */
class BayiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $no_urut = $this->faker->randomNumber(4) + 348104000;
        $number = $this->faker->numberBetween(1, 4);
        $number2 = $this->faker->numberBetween(40, 60);
        return [
            'no_urut' => $no_urut,
            'nama' => fake()->name(),
            'alamat' => fake()->randomElement(['Jl.xxx malang', 'Jl.yyy malang', 'Jl.zzz malang']),
            'tanggal_lahir' =>fake()->date(),
            'bb_lahir' => $number,
            'tb_lahir'=> $number2
        ];
    }
}
