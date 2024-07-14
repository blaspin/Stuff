<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Track;
use App\Models\Playlist;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlaylistTrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'playlist_id' => fake()->randomElements(Playlist::get('id')->toArray()),
            'track_id' => fake()->randomElements(Track::get('id')->toArray())
        ];
    }
}
