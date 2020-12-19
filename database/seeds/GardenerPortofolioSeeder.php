<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GardenerPortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gardener_portofolios')->insert([
            [
                'gardener_id' => 1,
                'image' => 'images/portofolios/ujo-sutejo/1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'gardener_id' => 2,
                'image' => 'images/portofolios/joni-rahman/1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'gardener_id' => 3,
                'image' => 'images/portofolios/bey-sikumbang/1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'gardener_id' => 4,
                'image' => 'images/portofolios/frans-nasution/1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'gardener_id' => 5,
                'image' => 'images/portofolios/romeo-wajowski/1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
