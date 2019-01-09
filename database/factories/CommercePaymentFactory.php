<?php

use Faker\Generator as Faker;

$factory->define(celiacomendoza\CommercePayment::class, function (Faker $faker) {
    return [
        'commerce_id' => rand(1, 100),
        'payment_id' => rand(1, 8),
    ];
});
