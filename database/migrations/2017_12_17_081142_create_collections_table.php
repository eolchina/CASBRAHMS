<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // need finely definition of the table field.
        Schema::create('collections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('collector')->nullable();
            $table->string('number')->nullable();
            $table->date('date')->nullable();
            $table->string('location')->nullable();
            $table->uuid('coluuid');
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
        Schema::dropIfExists('collections');
    }
}
