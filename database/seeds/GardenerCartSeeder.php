<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GardenerCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gardener_carts')->insert([
            [
                'user_id' => 1,
                'gardener_id' => 1, 
                'rent_days' => 10,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'gardener_id' => 2, 
                'rent_days' => 10,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'gardener_id' => 3, 
                'rent_days' => 10,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'gardener_id' => 4, 
                'rent_days' => 10,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'gardener_id' => 5, 
                'rent_days' => 10,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
