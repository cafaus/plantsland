<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PlantOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plant_origins')->insert([
            [
                'description' => "Echinocactus grusonii, popularly known as the golden barrel cactus, golden ball or mother-in-law's cushion, is a well known species of cactus, and is endemic to east-central Mexico.
                It is rare and endangered in the wild, where it is found near Mesa de León in the state of Querétaro, and in the state of Hidalgo. The population was critically reduced in the 1990s, by the 
                creation of the Zimapán Dam and reservoir in Hidalgo. The cactus grows in volcanic rock on slopes, at altitudes around 1,400 metres (4,600 ft)",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
