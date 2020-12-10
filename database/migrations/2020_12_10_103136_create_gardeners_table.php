<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGardenersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardeners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competence_id');
            $table->string("name");
            $table->string("image");
            $table->integer("likes");
            $table->integer("experience");
            $table->integer("price_per_day");
            $table->timestamps();

            $table->index('competence_id');
 	        $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gardeners');
    }
}
