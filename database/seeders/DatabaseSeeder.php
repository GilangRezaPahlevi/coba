<?php

namespace Database\Seeders;

use App\Models\cate;
use App\Models\cate_coba1;
use App\Models\User;
use App\Models\jenis;
use App\Models\coba1;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // membuat data baru secara otomatis
        User::create([
            'name' => 'MaiZera',
            'email' => 'Maizera@gmail.com',
            'password' => bcrypt('password')
        ]);

        jenis::create([
            'nama' => 'summer',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'winter',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'spring',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'fall',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'sunset',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'Sunrise',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'mountain',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'beach',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'sakura',
            'created_at' => now()
        ]);

        jenis::create([
            'nama' => 'night',
            'created_at' => now()
        ]);

        //dengan bantuan factory membuat data baru dengan jumlah yg bisa kita sesuaikan
        User::factory(4)->create();
        cate::factory(10)->create();
        Coba1::factory(100)->create();
        cate_coba1::factory(200)->create();
    }
}
