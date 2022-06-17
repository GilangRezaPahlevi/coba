<?php

namespace App\Models;


class mo
{
    private static $mlo = [
        [
            "saus" => "pp1",
            "name" => "ipsum dolor sit amet consectetur adipisicing elit. Sapiente eos alias voluptatibus exercitationem tempora quibusdam sequi ullam quod! Quaerat, eligendi. Repudiandae aliquam aliquid dolor alias, voluptatem magnam reprehenderit quia laudantium!",
            "mons" => "ha1"
        ],
        [
            "saus" => "pp2",
            "name" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque ut deserunt placeat, tempora id eius dolorem at aliquid modi magnam iste ratione minus! Totam explicabo pariatur eos libero quod culpa?",
            "mons" => "ha2"
        ]
    ];

    public static function moon()
    {
        return collect(self::$mlo);
    }

    public static function ca($saus)
    {
        $sa = static::moon();

        return  $sa->firstWhere('saus', $saus);
    }

    private static $isi = [
        "ame1" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, amet labore voluptatem ut velit qui repudiandae dicta, alias est, architecto corporis. Provident tempora, veniam natus aspernatur voluptates quibusdam maxime numquam saepe?
         Cumque ratione sint veritatis vero, necessitatibus dolorum porro consequatur a commodi ipsa corrupti voluptatum laborum ab magnam nam pariatur officia sapiente. Blanditiis voluptatibus laudantium corporis nihil at tempore velit animi, beatae ratione, nesciunt maiores suscipit esse. Itaque eligendi ratione corporis est inventore omnis 
         ipsum obcaecati ab quis voluptatum aliquid error, et a natus distinctio ut laudantium. Doloremque asperiores quaerat accusantium? Voluptates excepturi magni vel. Eaque libero hic laborum neque.",
        "ame2" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur fugit maxime doloribus laboriosam sequi tempore consectetur, earum illo, ab iure accusamus. Sequi voluptatem sapiente nihil officia deserunt obcaecati earum."
    ];

    public static function amir()
    {
        return self::$isi;
    }
}
