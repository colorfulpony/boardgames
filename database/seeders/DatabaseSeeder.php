<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserAdressesSeeder::class,
            UsersSeeder::class,
            MainPostsSeeder::class,
            MainPostTagsSeeder::class,
            ProductsSeeder::class,
            ProductCategoriesSeeder::class,
            ProductImagesSeeder::class,
            OrdersSeeder::class,
            CategoriesProductsSeeder::class,
            PostsTagsSeeder::class,
        ]);
    }
}
