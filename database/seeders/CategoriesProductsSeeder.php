<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $i = 0;
        while($i <=10) {
            $categoryId = random_int(1, 10);
            $productId = random_int(1, 10);

            $data[] = [
                'category_id' => $categoryId,
                'product_id' => $productId,
            ];
            $i++;
        }

        DB::table('category_products')->insert($data);
    }
}
