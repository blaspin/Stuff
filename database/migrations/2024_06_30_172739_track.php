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
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('album_id');
            $table->foreignId('media_type_id');
            $table->foreignId('genre_id');
            $table->string('composer');
            $table->integer('milliseconds');
            $table->integer('bytes');
            $table->string('unit_price');

             $table->foreign('album_id')->references('id')->on('albums');
             $table->foreign('media_type_id')->references('id')->on('media_types');
             $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
