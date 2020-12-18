<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PlantCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plant_carts')->insert([
            [
                'user_id' => 1,
                'plant_id' => 1,
                'quantity' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'plant_id' => 4,
                'quantity' => 20,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'plant_id' => 2,
                'quantity' => 15,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ]);
    }
}
