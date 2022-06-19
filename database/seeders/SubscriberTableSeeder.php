<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert(
            [
                'subscriber_id' => '1',
                'subscriber_email' => 'johnsmith@gmail.com',
                'website_id' => 1
            ],
            [
                'subscriber_id' => '2',
                'subscriber_email' => 'janesmith@gmail.com',
                'website_id' => 2
            ],
            [
                'subscriber_id' => '3',
                'subscriber_email' => 'samdoe@gmail.com',
                'website_id' => 3
            ]
        );
    }
}
