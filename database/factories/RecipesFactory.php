<?php

use Faker\Generator as Faker;

$factory->define(celiacomendoza\Recipes::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'name' => $title,
        'ingredients' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'steps' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'photos' => $faker->imageUrl($width = 640, $height = 480),
        'likes' => rand('1','100'),
        'slug' => $title,
        'user_id' => rand('1','100'),
        'category_id' => rand('1','5'),
    ];
});
