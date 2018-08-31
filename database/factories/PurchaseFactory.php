<?php

use Faker\Generator as Faker;

$factory->define(\celiacomendoza\Purchase::class, function (Faker $faker) {
    return [
        'num_invoice' => $faker->swiftBicNumber,
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'price' => $faker->numberBetween($min = 10, $max = 500),
        'quantity' => $faker->numberBetween($min = 10, $max = 500),
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'commerce_id' => rand(1, 10),
        'product_id' => rand(1, 100),
    ];
});
