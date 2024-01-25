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
        schema::create('galery_foto',function(Blueprint $table){
            //$table->id();
            $table->integer('FotoID');
            $table->string('JudulFoto',255);
            $table->text('DeskripsiFoto');
            $table->date('TanggalUnggah');
            $table->string('LokasiFile',255);
            $table->integer('AlbumID');
            $table->integer('UserID');
            $table->primary('FotoID');
            //$table->foreign('AlbumID')->references('AlbumID')->on('gallery_album');
            //$table->foreign('UserID')->references('UserID')->on('gallery_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_foto');
    }
};
