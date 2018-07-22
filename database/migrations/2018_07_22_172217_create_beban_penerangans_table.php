<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebanPenerangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beban_penerangans', function (Blueprint $table) {
            $table->increments('beban_id');
            $table->timestamps();
            $table->string('nm_ruang')->nullable();
            $table->string('jns_lamp')->nullable();
            $table->string('jml_lamp')->nullable();
            $table->string('daya_lamp')->nullable();
            $table->string('tot_pemakaian')->nullable();
            $table->dateTime('wktu_pengukuran')->nullable();
            $table->string('tot_dayapen')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beban_penerangans');
    }
}
