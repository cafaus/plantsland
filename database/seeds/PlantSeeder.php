<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([
            [
                'plant_category_id' => 1,
                'plant_origin_id' => 1,
                'name' => 'Cactus Echinocactus Grusoni',
                'image' => 'images/plants/cactus-echinocactus-grusoni.jpg',
                'price' => 700000,
                'height' => 25,
                'pot_size' => 24,
                'stock' => 100,
                'description' => "Cacti should not be missing in your home. Cacti give your interior character. They are decorative and easy to maintain. In addition, cacti are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
