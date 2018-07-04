<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHitungIKEsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hitung_i_k_es', function (Blueprint $table) {
            $table->increments('ike_id');
            $table->timestamps();
            $table->dateTime('wktu_pengukuran')->nullable();
            $table->string('hsil_perhitungan')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hitung_i_k_es');
    }
}
