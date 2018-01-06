<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ShopkeepersTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(SocialmediaTableSeeder::class);
    }
}
