<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfostatistik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infostatistik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Odp', 15);
            $table->string('Pdp', 15);
            $table->string('ProsesOdp', 15);
            $table->string('SelesaiOdp', 15);
            $table->string('ProsesPdp', 15);
            $table->string('SelesaiPdp', 15);
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
        Schema::dropIfExists('infostatistik');
    }
}
