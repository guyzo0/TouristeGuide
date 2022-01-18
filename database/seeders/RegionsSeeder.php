<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['name_region' => 'Adamaoua', 'country' => 'Cameroon', 'category' => 'Lake', 'type' => 'Volcanic', 'type_id' => 26,],

            ['name_region' => 'Center', 'country' => 'Cameroon', 'category' => 'Hotel', 'type' => '*****', 'type_id' => 19,],
            ['name_region' => 'Center', 'country' => 'Cameroon', 'category' => 'Monument', 'type' => 'Triumphal arch', 'type_id' => 53,],
            ['name_region' => 'Center', 'country' => 'Cameroon', 'category' => 'Monument', 'type' => 'Mound', 'type_id' => 39,],
            ['name_region' => 'Center', 'country' => 'Cameroon', 'category' => 'Museum', 'type' => 'Art', 'type_id' => 63,],
            ['name_region' => 'Center', 'country' => 'Cameroon', 'category' => 'River', 'type' => 'Equatorial climate', 'type_id' => 80,],
            ['name_region' => 'Center', 'country' => 'Cameroon', 'category' => 'Stadium', 'type' => 'Football', 'type_id' => 83,],

            ['name_region' => 'Far-North', 'country' => 'Cameroon', 'category' => 'Mountain', 'type' => 'Pelean', 'type_id' => 58,],
            ['name_region' => 'Far-North', 'country' => 'Cameroon', 'category' => 'Park', 'type' => 'National park', 'type_id' => 72,],

            ['name_region' => 'Littoral', 'country' => 'Cameroon', 'category' => 'Hotel', 'type' => '****', 'type_id' => 20,],
            ['name_region' => 'Littoral', 'country' => 'Cameroon', 'category' => 'Monument', 'type' => 'Benchmark', 'type_id' => 36,],
            ['name_region' => 'Littoral', 'country' => 'Cameroon', 'category' => 'Museum', 'type' => 'Maritime', 'type_id' => 62,],
            ['name_region' => 'Littoral', 'country' => 'Cameroon', 'category' => 'Stadium', 'type' => 'Football', 'type_id' => 83,],
            ['name_region' => 'Littoral', 'country' => 'Cameroon', 'category' => 'Waterfall', 'type' => 'waterfalls', 'type_id' => 93,],

            ['name_region' => 'North-West', 'country' => 'Cameroon', 'category' => 'Chiefdom', 'type' => 'First degree', 'type_id' => 11,],
            ['name_region' => 'North-West', 'country' => 'Cameroon', 'category' => 'Lake', 'type' => 'Volcanic', 'type_id' => 26,],

            ['name_region' => 'South', 'country' => 'Cameroon', 'category' => 'Beach', 'type' => 'White sang', 'type_id' => 1,],
            ['name_region' => 'South', 'country' => 'Cameroon', 'category' => 'Beach', 'type' => 'Grey sand', 'type_id' => 2,],
            ['name_region' => 'South', 'country' => 'Cameroon', 'category' => 'Forest', 'type' => 'Equatorial', 'type_id' => 14,],
            ['name_region' => 'South', 'country' => 'Cameroon', 'category' => 'Waterfall', 'type' => 'waterfalls', 'type_id' => 99,],

            ['name_region' => 'South-West', 'country' => 'Cameroon', 'category' => 'Beach', 'type' => 'Black sang', 'type_id' => 3,],
            ['name_region' => 'South-West', 'country' => 'Cameroon', 'category' => 'Hotel', 'type' => '***', 'type_id' => 21,],
            ['name_region' => 'South-West', 'country' => 'Cameroon', 'category' => 'Mountain', 'type' => 'Hawaiian', 'type_id' => 55,],
            ['name_region' => 'South-West', 'country' => 'Cameroon', 'category' => 'Park', 'type' => 'National park', 'type_id' => 72,],
            ['name_region' => 'South-West', 'country' => 'Cameroon', 'category' => 'Stadium', 'type' => 'Football', 'type_id' => 83,],

            ['name_region' => 'West', 'country' => 'Cameroon', 'category' => 'Chiefdom', 'type' => 'First degree', 'type_id' => 11,],
            ['name_region' => 'West', 'country' => 'Cameroon', 'category' => 'Chiefdom', 'type' => 'Second degree', 'type_id' => 12,],
            ['name_region' => 'West', 'country' => 'Cameroon', 'category' => 'Hotel', 'type' => '****', 'type_id' => 20,],
            ['name_region' => 'West', 'country' => 'Cameroon', 'category' => 'Lake', 'type' => 'Volcanic', 'type_id' => 26,],
            ['name_region' => 'West', 'country' => 'Cameroon', 'category' => 'Stadium', 'type' => 'Football', 'type_id' => 83,],
       ]);
    }
}
