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
        schema::create('galery_komentarfoto',function(Blueprint $table){

            $table->integer('KomentarID');
            $table->integer('FotoID');
            $table->integer('UserID');
            $table->text('IsiKomentarID');
            $table->date('TanggalKomentar');
            $table->primary('KomentarID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_komentarfoto');
    }
};
