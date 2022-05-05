<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainPostTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [];

        for($i = 1; $i <= 10; $i++) {
            $tagName = 'Tag #' . $i;

            $tags[] = [
                'title' => $tagName,
                'slug' => Str::slug($tagName),
            ];
        }
        
        DB::table('main_post_tags')->insert($tags);
    }
}
