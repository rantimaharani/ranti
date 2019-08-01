<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('buku_kode');
            $table->bigInteger('kategori_kode');
            $table->bigInteger('penerbit_kode');
            $table->string('buku_judul');
            $table->string('buku_jumhal');
            $table->string('buku_diskripsi');
            $table->string('buku_pengarang');
            $table->bigInteger('buku_tahun_terbit');
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
        Schema::dropIfExists('bukus');
    }
}
