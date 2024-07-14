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
        Schema::create('playlists_tracks', function (Blueprint $table) {
            $table->foreignId('playlist_id');
            $table->foreignId('track_id');

            $table->foreign('playlist_id')->references('id')->on('users');
            $table->foreign('track_id')->references('id')->on('users');
            $table->index(['playlist_id', 'track_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlists_tracks');
    }
};
