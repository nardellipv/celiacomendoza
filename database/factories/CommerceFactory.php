<?php

use Faker\Generator as Faker;

$factory->define(\celiacomendoza\Commerce::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'location' => $faker->city,
        'number' => rand(100, 10000),
        'phone' => $faker->phoneNumber,
        'web' => $faker->url,
        'about' => $faker->text($maxNbChars = 500),
        'twitter' => 'nardellip',
        'facebook' => 'todofraseslive',
        'logo' => $faker->imageUrl(),
        'user_id' => rand(1, 10),
    ];
});
