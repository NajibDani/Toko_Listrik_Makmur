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
        Schema::create('tbl_pengeluarans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pengeluaran');
            $table->text('keterangan');
            $table->string('bukti_pengeluaran');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_barang')->nullable();
            $table->integer('jumlah_barang');
            $table->integer('total');
            $table->timestamps();

            // foreign key
            $table->foreign('id_user')->references('id')->on('tbl_users')->onDelete('set null');
            $table->foreign('id_barang')->references('id')->on('tbl_barangs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pengeluarans');
    }
};
