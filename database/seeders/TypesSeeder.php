<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['category' => 'Beach', 'name_type' => 'White sang', 'category_id' => 1,], ['category' => 'Beach', 'name_type' => 'Grey sand', 'category_id' => 1,],
            ['category' => 'Beach', 'name_type' => 'Black sang', 'category_id' => 1,], ['category' => 'Beach', 'name_type' => 'Green sang', 'category_id' => 1,],
            ['category' => 'Beach', 'name_type' => 'Red sang', 'category_id' => 1,], ['category' => 'Beach', 'name_type' => 'Blond sang', 'category_id' => 1,],
            ['category' => 'Beach', 'name_type' => 'Pink sang', 'category_id' => 1,], ['category' => 'Beach', 'name_type' => 'Brown sang', 'category_id' => 1,],
            ['category' => 'Beach', 'name_type' => 'Pebble beach', 'category_id' => 1,], ['category' => 'Beach', 'name_type' => 'Glass beach', 'category_id' => 1,],

            ['category' => 'Chiefdom', 'name_type' => 'First degree', 'category_id' => 2,], ['category' => 'Chiefdom', 'name_type' => 'Second degree', 'category_id' => 2,],
            ['category' => 'Chiefdom', 'name_type' => 'Third degree', 'category_id' => 2,],

            ['category' => 'Forest', 'name_type' => 'Equatorial', 'category_id' => 3,], ['category' => 'Forest', 'name_type' => 'Temperate', 'category_id' => 3,],
            ['category' => 'Forest', 'name_type' => 'Tropical', 'category_id' => 3,],

            ['category' => 'Hotel', 'name_type' => '*******', 'category_id' => 4,], ['category' => 'Hotel', 'name_type' => '******', 'category_id' => 4,],
            ['category' => 'Hotel', 'name_type' => '*****', 'category_id' => 4,], ['category' => 'Hotel', 'name_type' => '****', 'category_id' => 4,],
            ['category' => 'Hotel', 'name_type' => '***', 'category_id' => 4,], ['category' => 'Hotel', 'name_type' => '**', 'category_id' => 4,],
            ['category' => 'Hotel', 'name_type' => '*', 'category_id' => 4,], 

            ['category' => 'Lake', 'name_type' => 'Tectonic', 'category_id' => 5,], ['category' => 'Lake', 'name_type' => 'Shoreline', 'category_id' => 5,],
            ['category' => 'Lake', 'name_type' => 'Volcanic', 'category_id' => 5,], ['category' => 'Lake', 'name_type' => 'Organic', 'category_id' => 5,],
            ['category' => 'Lake', 'name_type' => 'Landslide', 'category_id' => 5,], ['category' => 'Lake', 'name_type' => 'Anthropogenic', 'category_id' => 5,],
            ['category' => 'Lake', 'name_type' => 'Glacial', 'category_id' => 5,], ['category' => 'Lake', 'name_type' => 'Meteorite', 'category_id' => 5,],
            ['category' => 'Lake', 'name_type' => 'Solution', 'category_id' => 5,], ['category' => 'Lake', 'name_type' => 'Artificial', 'category_id' => 5,],
            ['category' => 'Lake', 'name_type' => 'Fluvial', 'category_id' => 5,], ['category' => 'Lake', 'name_type' => 'Aeolian', 'category_id' => 5,],

            ['category' => 'Monument', 'name_type' => 'Benchmark', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Mosque', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'Building', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Mound', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'Cenotaph', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Obelisk', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'Church', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Palace', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'Eternal flame', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Searchlight', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'Fountain', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Statut', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'Gravestone', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Temple', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'Mausoleum', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Terminating vista', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'Monolith', 'category_id' => 6,], ['category' => 'Monument', 'name_type' => 'Triumphal arch', 'category_id' => 6,],
            ['category' => 'Monument', 'name_type' => 'War memorial', 'category_id' => 6,],

            ['category' => 'Mountain', 'name_type' => 'Hawaiian', 'category_id' => 7,], ['category' => 'Mountain', 'name_type' => 'Vulcanian', 'category_id' => 7,],
            ['category' => 'Mountain', 'name_type' => 'Icelandic', 'category_id' => 7,], ['category' => 'Mountain', 'name_type' => 'Pelean', 'category_id' => 7,],
            ['category' => 'Mountain', 'name_type' => 'Strombolian', 'category_id' => 7,], ['category' => 'Mountain', 'name_type' => 'Plinian', 'category_id' => 7,],

            
            ['category' => 'Museum', 'name_type' => 'Archaeology', 'category_id' => 8,], ['category' => 'Museum', 'name_type' => 'Maritime', 'category_id' => 8,],
            ['category' => 'Museum', 'name_type' => 'Art', 'category_id' => 8,], ['category' => 'Museum', 'name_type' => 'Military and War', 'category_id' => 8,],
            ['category' => 'Museum', 'name_type' => 'Encyclopedic', 'category_id' => 8,], ['category' => 'Museum', 'name_type' => 'Mobile', 'category_id' => 8,],
            ['category' => 'Museum', 'name_type' => 'History house', 'category_id' => 8,], ['category' => 'Museum', 'name_type' => 'Natural history', 'category_id' => 8,],
            ['category' => 'Museum', 'name_type' => 'History', 'category_id' => 8,], ['category' => 'Museum', 'name_type' => 'Open-air', 'category_id' => 8,],
            ['category' => 'Museum', 'name_type' => 'Living history', 'category_id' => 8,], 

            ['category' => 'Park', 'name_type' => 'National park', 'category_id' => 9,], ['category' => 'Park', 'name_type' => 'Amusement park', 'category_id' => 9,],
            ['category' => 'Park', 'name_type' => 'Natural park', 'category_id' => 9,], ['category' => 'Park', 'name_type' => 'Botanical garden', 'category_id' => 9,],
            ['category' => 'Park', 'name_type' => 'Public garden', 'category_id' => 9,], ['category' => 'Park', 'name_type' => 'Zoo', 'category_id' => 9,],
            ['category' => 'Park', 'name_type' => 'Recreation park', 'category_id' => 9,], ['category' => 'Park', 'name_type' => 'Archaeological park', 'category_id' => 9,],

            ['category' => 'River', 'name_type' => 'Equatorial climate', 'category_id' => 10,], ['category' => 'River', 'name_type' => 'Mild climate', 'category_id' => 10,],
            ['category' => 'River', 'name_type' => 'Tropical climate', 'category_id' => 10,],

            
            ['category' => 'Stadium', 'name_type' => 'Football', 'category_id' => 11,], ['category' => 'Stadium', 'name_type' => 'Rugby', 'category_id' => 11,],
            ['category' => 'Stadium', 'name_type' => 'Handball', 'category_id' => 11,], ['category' => 'Stadium', 'name_type' => 'Tennisball', 'category_id' => 11,],
            ['category' => 'Stadium', 'name_type' => 'Volleyball', 'category_id' => 11,], ['category' => 'Stadium', 'name_type' => 'Multisport', 'category_id' => 11,],
            ['category' => 'Stadium', 'name_type' => 'Basketball', 'category_id' => 11,],

            ['category' => 'Waterfall', 'name_type' => 'Punchbowl waterfalls', 'category_id' => 12,], ['category' => 'Waterfall', 'name_type' => 'fan waterfalls', 'category_id' => 12,],
            ['category' => 'Waterfall', 'name_type' => 'plunging waterfalls', 'category_id' => 12,], ['category' => 'Waterfall', 'name_type' => 'waterfalls', 'category_id' => 12,],
            ['category' => 'Waterfall', 'name_type' => 'multi-stage waterfalls', 'category_id' => 12,], ['category' => 'Waterfall', 'name_type' => 'cataracts', 'category_id' => 12,],
            ['category' => 'Waterfall', 'name_type' => 'horsetail waterfalls', 'category_id' => 12,], ['category' => 'Waterfall', 'name_type' => 'boulder waterfalls', 'category_id' => 12,],
            ['category' => 'Waterfall', 'name_type' => 'frozen waterfalls', 'category_id' => 12,], ['category' => 'Waterfall', 'name_type' => 'Plinian', 'category_id' => 12,],


       ]);
    }
}
