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
        schema::create('galery_likefoto',function(Blueprint $table){
            //$table->id();
            $table->integer('LikeID');
            $table->integer('FotoID');
            $table->integer('UserID');
            $table->date('TanggalLike');
            //$table->foreign('FotoID')->references('FotoID')->on('gallery_foto');
            //$table->foreign('UserID')->references('UserID')->on('gallery_user');
            $table->primary('LikeID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_likefoto');
    }
};
