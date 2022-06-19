<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('websites')->insert(
            [
                'name' => 'Sub One Site',
                'url' => 'https://subone.com'
            ],
            [
                'name' => 'Sub Two site',
                'url' => 'https://subtwo.com'
            ],
            [
                'name' => 'Sub Three Site',
                'url' => 'https://subthree.com'
            ],
        );
    }
}
