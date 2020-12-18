<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plant_category_id');
            $table->unsignedBigInteger('plant_origin_id');
            $table->string('name');
            $table->string('image');
            $table->integer('price');
            $table->integer('height');
            $table->integer('pot_size');
            $table->integer('stock');
            $table->longText('description');
            $table->timestamps();

            $table->index('plant_category_id');
            $table->foreign('plant_category_id')->references('id')->on('plant_categories')->onDelete('cascade');

            $table->index('plant_origin_id');
            $table->foreign('plant_origin_id')->references('id')->on('plant_origins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants');
    }
}
