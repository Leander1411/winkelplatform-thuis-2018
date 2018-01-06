<?php

use Faker\Generator as Faker;

$factory->define(App\Shop::class, function (Faker $faker) {
    $faker->locale = "nl-NL"; //test omzetten random generator code naar Nederlands

    return [
        'product_id' => $faker->randomDigitNotNull,
        'social_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'logo' => $faker->imageUrl($width = 200, $height = 200),            
        'image' => $faker->imageUrl($width = 200, $height = 200),
        'description' => $faker->text($maxNbChars = 200),
        'image_small' => $faker->imageUrl($width = 200, $height = 200),
        'description_small' => $faker->text($maxNbChars = 200),
        'special_offer' => $faker->text($maxNbChars = 200),
        'google_maps' => $faker->imageUrl($width = 400, $height = 400),
    ];
});
