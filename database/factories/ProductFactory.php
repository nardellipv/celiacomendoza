<?php

use Faker\Generator as Faker;

$factory->define(\celiacomendoza\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' =>  $faker->paragraph($nbSentences = 150, $variableNbSentences = true),
        'price' => $faker->numberBetween($min = 10, $max = 500),
        'offer' => $faker->numberBetween($min = 10, $max = 500),
        'in_offer' => $faker->randomElement($array = array('YES', 'NO')),
        'highlight' => $faker->randomElement($array = array('YES', 'NO')),
        'available' => $faker->randomElement($array = array('YES', 'NO')),
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'commerce_id' => rand(1, 100),
        'category_id' => rand(1, 12),
    ];
});
