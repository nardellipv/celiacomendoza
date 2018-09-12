<?php

use Faker\Generator as Faker;

$factory->define(\celiacomendoza\Message::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'message' => $faker->sentence($nbWords = 100, $variableNbWords = true),
        'read' => $faker->randomElement($array = array('YES', 'NO')),
        'commerce_id' => rand(1, 10),
    ];
});
