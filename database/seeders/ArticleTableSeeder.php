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
                'subscriber_email' => 'John  Smith',
                'website_id' => 'johnsmith@gmail.com'
            ],
            [
                'subscriber_email' => 'Jane  Smith',
                'website_id' => 'janesmith@gmail.com'
            ]
        );
    }
}
