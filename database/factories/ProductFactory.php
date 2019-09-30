<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {

	$categories = App\Category::pluck('id')->toArray();
	
    return [
        'name' => $faker->word,
        'details' => $faker->sentence($nbWords = 200, $variableNbWords = false),
        'allDetails' => $faker->sentence($nbWords = 200, $variableNbWords = false),
        'category_id' => $faker->randomElement($categories),
        'pictures' => $faker->numberBetween($min = 0, $max = 0),
        'price' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
