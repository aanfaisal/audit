<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->increments('profil_id');
            $table->string('p_gedung')->nullable();
            $table->string('nama_institusi')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jml_gedung')->nullable();
            $table->string('jml_lantai')->nullable();
            $table->string('jml_meter')->nullable();
            $table->string('meter_id')->nullable();
            $table->string('tot_daya')->nullable();
            $table->string('pnjng_gedung')->nullable();
            $table->string('lbr_gedung')->nullable();
            $table->string('tinggi_gedung')->nullable();
            $table->string('luas_gedung')->nullable();
            $table->timestamps();
            $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profils');
    }
}
