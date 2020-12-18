<?php

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
        $this->call(UserSeeder::class);
        $this->call(CompetenceSeeder::class);
        $this->call(PlantCategorySeeder::class);
        $this->call(PlantOriginSeeder::class);
        $this->call(PlantSeeder::class);
        $this->call(PlantCareSeeder::class);
        $this->call(PlantCartSeeder::class);
        $this->call(GardenerSeeder::class);
        $this->call(GardenerPortofolioSeeder::class);
        $this->call(GardenerCartSeeder::class);
    }
}
