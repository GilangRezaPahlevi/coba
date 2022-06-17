<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//factory digunakan untuk membuat data yang nanti akan dikirimkan ke seeders

class Coba1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //mt_rand memberikan nilai acak 
            //penulisan mt_rand(nilai terkecil , nilai terbesar)
            'jenis_id' => mt_rand(1, 10),
            'user_id' => mt_rand(1, 5),
            //faker digunakan untuk membuat data palsu 
            'isi' => $this->faker->sentence(mt_rand(1, 3)),
            'slug' => $this->faker->slug(),
            'isi2' => $this->faker->paragraph(mt_rand(10, 30)),
            'isi3' => $this->faker->paragraph(mt_rand(10, 30))
        ];
    }
}
