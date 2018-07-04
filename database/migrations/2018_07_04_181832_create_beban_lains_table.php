<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebanLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beban_lains', function (Blueprint $table) {
            $table->increments('bebanlain_id');
            $table->timestamps();
            $table->string('nm_ruang')->nullable();
            $table->string('jns_beban')->nullable();
            $table->string('jml_beban')->nullable();
            $table->string('daya_beban')->nullable();
            $table->string('tot_pemakaian')->nullable();
            $table->dateTime('wktu_pengukuran')->nullable();
            $table->string('tot_dayalain')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beban_lains');
    }
}
