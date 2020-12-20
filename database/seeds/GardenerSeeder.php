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
                'image' => 'images/gardeners/ujo-sutejo1.jpeg',
                'likes' => 95,
                'experience' => 20,
                'price_per_day' => 1000000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'competence_id' => 2,
                'name' => 'Joni Rahman',
                'image' => 'images/gardeners/joni-rahman.jpeg',
                'likes' => 93,
                'experience' => 18,
                'price_per_day' => 800000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'competence_id' => 3,
                'name' => 'Bey Sikumbang',
                'image' => 'images/gardeners/bey-sikumbang.jpeg',
                'likes' => 98,
                'experience' => 22,
                'price_per_day' => 1200000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'competence_id' => 4,
                'name' => 'Frans Nasution',
                'image' => 'images/gardeners/frans-nasution.jpeg',
                'likes' => 92,
                'experience' => 5,
                'price_per_day' => 385000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'competence_id' => 5,
                'name' => 'Romeo Wajowski',
                'image' => 'images/gardeners/romeo-wajowski.jpeg',
                'likes' => 94,
                'experience' => 19,
                'price_per_day' => 420000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
