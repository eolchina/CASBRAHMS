<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecimensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specimens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode');
            $table->string('collector')->nullable();
            $table->string('number')->nullable();
            $table->date('date')->nullable();
            $table->string('location')->nullable();
            $table->uuid('smuuid');
            $table->integer('collection_id')->index();
            $table->integer('herbarium_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specimens');
    }
}
