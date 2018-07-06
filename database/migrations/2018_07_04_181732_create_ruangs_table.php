<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRuangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangs', function (Blueprint $table) {
            $table->increments('ruang_id');
            $table->string('nm_ruang')->nullable();
            $table->string('luas_ruang')->nullable();
            $table->string('tot_dayapenerangan')->nullable();
            $table->string('tot_dayaac')->nullable();
            $table->string('tot_dayalain')->nullable();
            $table->string('tot_dayamesin')->nullable();
            $table->string('nilai_IKE')->nullable();
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
        Schema::drop('ruangs');
    }
}
