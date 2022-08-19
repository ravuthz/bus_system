<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'text' => $faker->text,
        'note' => $faker->sentence,
        'status' => $faker->randomDigitNotNull,
    ];
});
