<?php

use Faker\Generator as Faker;

$factory->define(celiacomendoza\CharacteristicCommerce::class, function (Faker $faker) {
    return [
        'characteristic_id' => rand(1, 8),
        'commerce_id' => rand(1, 100),
    ];
});
