<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGardenerTransactionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardener_transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_history_id');
            $table->string('name');
            $table->string('image');
            $table->integer('rent_days');
            $table->integer('totalPrice');
            $table->timestamps();

            $table->index('transaction_history_id');
            $table->foreign('transaction_history_id')->references('id')->on('transaction_histories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gardener_transaction_histories');
    }
}
