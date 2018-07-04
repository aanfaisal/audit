<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebanACsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beban_a_cs', function (Blueprint $table) {
            $table->increments('bebanac_id');
            $table->timestamps();
            $table->string('nm_ruang')->nullable();
            $table->string('jml_ac')->nullable();
            $table->string('daya_ac')->nullable();
            $table->string('tot_pemakaian')->nullable();
            $table->string('wktu_pengukuran')->nullable();
            $table->string('tot_dayaac')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beban_a_cs');
    }
}
