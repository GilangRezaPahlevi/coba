<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class cate_coba1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1, 10),
            'post_id' => mt_rand(1, 100)
        ];
    }
}
