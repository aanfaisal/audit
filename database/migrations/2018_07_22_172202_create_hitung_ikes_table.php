<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHitungIkesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hitung_ikes', function (Blueprint $table) {
            $table->increments('ike_id');
            $table->dateTime('wktu_pengukuran')->nullable();
            $table->string('hsil_perhitungan')->nullable();
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
        Schema::drop('hitung_ikes');
    }
}
