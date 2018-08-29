<?php

use Faker\Generator as Faker;

$factory->define(\celiacomendoza\Commerce::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'location' => $faker->city,
        'phone' => $faker->phoneNumber,
        'web' => $faker->url,
        'twitter' => 'nardellip',
        'facebook' => 'todofraseslive',
        'logo' => $faker->imageUrl(),
        'user_id' => rand(1, 10),
    ];
});
