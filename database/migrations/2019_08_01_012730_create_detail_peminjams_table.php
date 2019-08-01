<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPeminjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_peminjams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('peminjam_kode');
            $table->bigInteger('buku_kode');
            $table->date('detail_tgl_kembali');
            $table->string('detail_denda');
            $table->string('detail_status_kembali');
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
        Schema::dropIfExists('detail_peminjams');
    }
}
