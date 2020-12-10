<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGardenerPortofoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardener_portofolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gardener_id');
            $table->string('image');
            $table->timestamps();
            
            $table->index('gardener_id');
            $table->foreign('gardener_id')->references('id')->on('gardeners')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gardener_portofolios');
    }
}
