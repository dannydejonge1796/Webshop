<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->sentence($nbWords = 200, $variableNbWords = false),
        'allDetails' => $faker->sentence($nbWords = 200, $variableNbWords = false),
        'category_id' => $faker->numberBetween($min = 0, $max = 7),
        'pictures' => $faker->numberBetween($min = 0, $max = 0),
        'price' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
