<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(
            [
                'website_id' => 1,
                'author_id' => 2,
                'author_email' => 'johndoes@gmail.com',
                'title' => 'The essense of science',
                'description' => 'The essense of science',
                'post_slug' => 'essende_of_science',
                'post_content' => 'Science is the source of allt things',
            ],
        );
    }
}
