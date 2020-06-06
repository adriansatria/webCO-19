<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfocovid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infocovid', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Tanggal');
            $table->string('Pasien_positif', 15);
            $table->string('Pasien_sembuh', 15);
            $table->string('Pasien_meninggal', 15);
            $table->string('Provinsi', 50);
            $table->string('Zona_daerah', 15);
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
        Schema::dropIfExists('infocovid');
    }
}
