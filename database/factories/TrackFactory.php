<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Track;
use App\Models\Album;
use App\Models\MediaType;
use App\Models\Genre;
use App\Models\Artist;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
{

    protected $model = Track::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(rand(1, 3), true),
            'album_id' => fake()->randomElements(Album::get('id'))[0],
            'media_type_id' => fake()->randomElements(MediaType::get('id'))[0],
            'genre_id' => fake()->randomElements(Genre::get('id'))[0],
            'composer' => fake()->randomElements(Artist::get('name'))[0]->name,
            'milliseconds' => fake()->randomNumber(6, false),
            'bytes' => fake()->randomNumber(6, false),
            'unit_price' => fake()->randomFloat(1, 0, 2),
        ];
    }
}
