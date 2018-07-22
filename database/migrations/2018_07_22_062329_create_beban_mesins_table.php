<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebanMesinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beban_mesins', function (Blueprint $table) {
            $table->increments('bebanmesin_id');
            $table->string('nm_ruang')->nullable();
            $table->string('nm_mesin')->nullable();
            $table->string('daya_mesin')->nullable();
            $table->string('tot_pemakaian')->nullable();
            $table->dateTime('wktu_pengukuran')->nullable();
            $table->string('tot_dayamesin')->nullable();
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
        Schema::drop('beban_mesins');
    }
}
