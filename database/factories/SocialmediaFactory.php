<?php

use Faker\Generator as Faker;

$factory->define(App\Socialmedia::class, function (Faker $faker) {
    return [
        'shop_website' => $faker->url,
        'facebook' => $faker->url,
        'twitter' => $faker->url,
        'linkedin' => $faker->url,
        'other_socialmedia' => $faker->url,
    ];
});
