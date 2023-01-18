<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asets', function (Blueprint $table) {
            $table->id('id_aset');
            $table->foreignId('id_area');
            $table->foreign('id_area')->references('id_area')->on('areas')->onDelete('cascade');
            $table->foreignId('id_golongan');
            $table->foreign('id_golongan')->references('id_golongan')->on('golongans')->onDelete('cascade');
            $table->string('nama_barang');
            $table->string('model');
            $table->string('seri_pabrik')->nullable();
            $table->string('ukuran');
            $table->string('bahan');
            $table->string('gambar')->nullable();
            $table->date('tanggal_pembelian');
            $table->string('kode_barang');
            $table->unsignedInteger('jumlah_barang');
            $table->unsignedBigInteger('harga');
            $table->string('keadaan_barang');
            $table->text('keterangan')->nullable();
            $table->boolean('bit_active')->default(1);
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
        Schema::dropIfExists('asets');
    }
}
