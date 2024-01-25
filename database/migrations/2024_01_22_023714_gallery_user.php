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
        schema::create('galery_user',function(Blueprint $table){
            //$table->id();
            $table->bigIncrements('UserID');
            $table->string('Username',255);
            $table->string('Password',255);
            $table->string('Email',255);
            $table->string('NamaLengkap',255);
            $table->text('Alamat');
            //$table->primary('UserID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_user');
    }
};
