<?php

use Faker\Generator as Faker;

// $factory->define(Model::class, function (Faker $faker) {
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text ,
        'brand' => $faker->company ,
        // 'properties' => $faker->words($nb = 4, $asText = false) ,         
        'properties' => $faker->word,
        'image' => $faker->imageUrl($width = 640, $height = 480) ,            
            // name
            // category_id// 
            // 
            // 
            // 
    ];
});
