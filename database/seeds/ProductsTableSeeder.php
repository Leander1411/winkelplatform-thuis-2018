<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  DB::table('products')->insert([
            factory(\App\Product::class, 100)->create();
            // 'name' => str_random(5),
            // 'description' => str_random(10),
            // 'price' => randomFloat(7),
            
            // name
            // category_id
            // description
            // brand
            // properties
            // image

            //'name' => str_random(15),
            //'category_id' => 
            //'description' => str_random(40),
            //'brand' => str_random(40),
            //'properties' => str_random(40),
            //'image' => str_random(40),
      //  ]);
    }
}
