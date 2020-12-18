<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GardenerTransactionHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gardener_transaction_histories')->insert([
            [
                'transaction_history_id' => 1,
                'name' => 'Ujo Sutejo',
                'image' => 'images/gardeners/ujo-sutejo.jpeg',
                'rent_days' => 10,
                'totalPrice' => 5000000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
