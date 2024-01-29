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
        Schema::create('tbl_transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembelian')->nullable();
            $table->unsignedBigInteger('id_pengeluaran')->nullable();
            $table->timestamps();

            // foreign key
            $table->foreign('id_pembelian')->references('id')->on('tbl_pembelians')->onDelete('set null');
            $table->foreign('id_pengeluaran')->references('id')->on('tbl_pengeluarans')->onDelete('set null');

        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_transaksis');
    }
};
