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
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->uuid('id_buku');
            $table->string('judul_buku',50);
            $table->string('nama_pengarang',50);
            $table->integer('tahun_terbit');
            $table->string('penerbit',50);
            $table->string('jumlah_buku');
            $table->string('nomor_rak_buku',50);
            $table->timestamps();
            $table->primary('id_buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
