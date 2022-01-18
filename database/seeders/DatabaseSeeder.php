<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(AdminSeeder::class); 
        $this->call(CategoriesSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(SitesSeeder::class);
        
    }
}
