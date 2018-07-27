<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RuangsDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ruangs_detail', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->integer('nm_ruang')->unsigned();
            $table->string('jns_lamp')->nullable();
            $table->string('jml_lamp')->nullable();
            $table->string('daya_lamp')->nullable();
            $table->string('nmbebanac')->nullable();
            $table->string('jml_ac')->nullable();
            $table->string('daya_ac')->nullable();
            $table->string('jnsbebanlain')->nullable();
            $table->string('jmlbebanlain')->nullable();
            $table->string('dyabebanlain')->nullable();
            $table->string('nm_mesin')->nullable();
            $table->string('jml_mesin')->nullable();
            $table->string('daya_mesin')->nullable();

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
        Schema::drop('ruangs_detail');
    }
}
