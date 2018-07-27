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
            $table->integer('nm_ruang')->unsigned();
            $table->string('jns_beban')->nullable();
            $table->string('jml_beban')->nullable();
            $table->string('daya_beban')->nullable();
            $table->string('tot_pemakaian')->nullable();
            $table->dateTime('wktu_pengukuran')->nullable();
            $table->string('tot_dayalain')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('nm_ruang')->references('ruang_id')->on('ruangs');
            
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
