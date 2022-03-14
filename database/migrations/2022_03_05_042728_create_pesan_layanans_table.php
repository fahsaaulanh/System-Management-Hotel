<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_layanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('checkin_id')->unsigned();
            $table->bigInteger('layanan_id')->unsigned();
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('checkin_id')->references('id')->on('checkins');
            $table->foreign('layanan_id')->references('id')->on('layanans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesan_layanans');
    }
}
