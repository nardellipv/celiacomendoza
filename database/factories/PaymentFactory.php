<?php

use Faker\Generator as Faker;

$factory->define(\celiacomendoza\Payment::class, function (Faker $faker) {
    return [
        'name' => $faker->creditCardType,
        'photo' => $faker->imageUrl($width = 300, $height = 300),
    ];
});
