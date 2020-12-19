<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PlantTransactionHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plant_transaction_histories')->insert([
            [
                'transaction_history_id' => 1,
                'name' => 'Cactus Echinocactus Grusoni',
                'image' => 'images/plants/cactus-echinocactus-grusoni.jpg',
                'quantity' => 10,
                'totalPrice' => 6500000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
