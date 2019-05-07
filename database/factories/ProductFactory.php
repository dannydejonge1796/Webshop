<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->sentence($nbWords = 15, $variableNbWords = false),
        'category_id' => $faker->numberBetween($min = 0, $max = 7),
    ];
});
