<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebanAcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beban_acs', function (Blueprint $table) {
            $table->increments('bebanac_id');
            $table->integer('ruang_id')->unsigned();
            $table->string('jml_ac')->nullable();
            $table->string('daya_ac')->nullable();
            $table->string('tot_pemakaian')->nullable();
            $table->dateTime('wktu_pengukuran')->nullable();
            $table->string('tot_dayaac')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ruang_id')->references('ruang_id')->on('ruangs');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beban_acs');
    }
}
