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
            $table->string('TempatPenulisan');
            $table->date('TanggalPenulisan');
            $table->string('TujuanSurat');
            $table->string('AlamatTujuan');
            $table->string('SalamPembuka');
            $table->text('Isi');
            $table->string('SalamPenutup');
            $table->string('Pengirim');
            $table->biginteger('id_category')->unsigned();
            $table->string('Ttd');
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
