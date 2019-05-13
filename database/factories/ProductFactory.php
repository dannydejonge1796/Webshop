<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'allDetails' => $faker->sentence($nbWords = 200, $variableNbWords = false),
        'category_id' => $faker->numberBetween($min = 0, $max = 7),
    ];
});
