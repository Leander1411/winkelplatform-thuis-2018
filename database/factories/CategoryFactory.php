<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'category1' => $faker->word,
        'category2' => $faker->word,
        'category3' => $faker->word,
    ];
});
