<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jenis_layanan_id')->unsigned();
            $table->string('layanan');
            $table->integer('harga');
            $table->string('satuan');
            $table->foreign('jenis_layanan_id')->references('id')->on('jenis_layanans');
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
        Schema::dropIfExists('layanans');
    }
}
