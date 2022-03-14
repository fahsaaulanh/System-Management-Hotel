<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_invoice');
            $table->bigInteger('kamar_id')->unsigned();
            $table->string('gelar_tamu');
            $table->bigInteger('tamu_id')->unsigned();
            $table->integer('jumlah_tamu');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->integer('deposit');
            $table->integer('total_biaya');
            $table->integer('biaya_tambahan')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('kamar_id')->references('id')->on('kamars');
            $table->foreign('tamu_id')->references('id')->on('tamus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkins');
    }
}
