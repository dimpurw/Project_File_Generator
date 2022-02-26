<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_users')->unsigned();
            $table->biginteger('id_category')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_category')->references('id')->on('category');
            //$table->string('judul_surat');
            $table->binary('file_surat');
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
        Schema::dropIfExists('surats');
    }
}
