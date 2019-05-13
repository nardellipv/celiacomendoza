<?php

use Faker\Generator as Faker;

$factory->define(\celiacomendoza\Commerce::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'name' => $title,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'web' => $faker->url,
        'about' => $faker->text($maxNbChars = 500),
        'votes_positive' => rand(0, 100),
        'votes_negative' => rand(0, 100),
        'facebook' => 'todofraseslive',
        'logo' => $faker->imageUrl(),
        'slug' => $title,
        'user_id' => rand(1, 100),
        'province_id' => rand(1, 24),
        'region_id' => rand(1, 500),
    ];
});
