<?php

use Faker\Generator as Faker;

$factory->define(\celiacomendoza\Picture::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'product_id' => rand(1, 100),
    ];
});
