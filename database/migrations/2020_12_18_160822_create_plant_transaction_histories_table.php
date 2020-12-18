<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantTransactionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_history_id');
            $table->string('name');
            $table->string('image');
            $table->integer('quantity');
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
        Schema::dropIfExists('plant_transaction_histories');
    }
}
