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
        Schema::create('tbl_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->unsignedBigInteger('id_supplier')->nullable();
            $table->integer('stok_barang');
            $table->unsignedBigInteger('id_satuan')->nullable();
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->integer('harga_barang');
            $table->timestamps();

            // foreign key
            $table->foreign('id_supplier')->references('id')->on('tbl_suppliers')->onDelete('set null');
            $table->foreign('id_satuan')->references('id')->on('tbl_satuans')->onDelete('set null');
            $table->foreign('id_kategori')->references('id')->on('tbl_kategoris')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_barangs');
    }
};
