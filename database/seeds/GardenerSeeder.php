<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GardenerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gardeners')->insert([
            [
                'competence_id' => 1,
                'name' => 'Ujo Sutejo',
                'image' => 'images/gardeners/ujo-sutejo.jpeg',
                'likes' => 95,
                'experience' => 20,
                'price_per_day' => 500000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
