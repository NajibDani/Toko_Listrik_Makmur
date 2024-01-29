<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pembelian');
            $table->unsignedBigInteger('id_barang')->nullable();
            $table->string('jenis_pembelian');
            $table->string('nama_pembeli');
            $table->integer('harga_pembelian');
            $table->timestamps();

            // foreign key
            $table->foreign('id_barang')->references('id')->on('tbl_barangs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pembelians');
    }
};
