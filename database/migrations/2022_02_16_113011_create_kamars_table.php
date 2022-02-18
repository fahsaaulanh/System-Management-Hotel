<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_kamar')->unique();
            $table->bigInteger('id_type_kamar')->unsigned();
            $table->integer('max');
            $table->string('status');
            $table->foreign('id_type_kamar')->references('id')->on('type_kamars');
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
        Schema::dropIfExists('kamars');
    }
}
