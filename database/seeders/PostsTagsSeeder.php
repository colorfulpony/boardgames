<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTagsSeeder extends Seeder
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
            $postId = random_int(1, 10);
            $tagId = random_int(1, 10);

            $data[] = [
                'post_id' => $postId,
                'tag_id' => $tagId,
            ];
            $i++;
        }

        DB::table('post_tags')->insert($data);
    }
}
