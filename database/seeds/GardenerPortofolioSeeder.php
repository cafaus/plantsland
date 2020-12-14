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
                'gardener_id' => 1,
                'image' => 'images/portofolios/ujo-sutejo/2.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
