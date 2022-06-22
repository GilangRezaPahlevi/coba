<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class cateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(mt_rand(1, 2)),
        ];
    }
}
