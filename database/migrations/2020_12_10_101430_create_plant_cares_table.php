<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_cares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plant_id');
            $table->string('care_title');
            $table->longText('description');
            $table->timestamps();

            $table->index('plant_id');
 	        $table->foreign('plant_id')->references('id')->on('plants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plant_cares');
    }
}
