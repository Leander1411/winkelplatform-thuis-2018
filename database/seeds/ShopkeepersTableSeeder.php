<?php

use Illuminate\Database\Seeder;

class ShopkeepersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Shopkeeper::class, 10)->create();
    }
}
