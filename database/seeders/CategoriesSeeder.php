<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name_category' => 'Beach',],
            ['name_category' => 'Chiefdom',],
            ['name_category' => 'Forest',],
            ['name_category' => 'Hotel',],
            ['name_category' => 'Lake',],
            ['name_category' => 'Monument',],
            ['name_category' => 'Mountain',],
            ['name_category' => 'Museum',],
            ['name_category' => 'Park',],
            ['name_category' => 'River',],
            ['name_category' => 'Stadium',],
            ['name_category' => 'Waterfall',],
       ]);
    }
}
