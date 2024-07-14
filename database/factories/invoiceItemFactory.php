<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Invoice;
use App\Models\Track;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class invoiceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_id' => fake()->randomElements(Invoice::get('id'))[0],
            'track_id' => fake()->randomElements(Track::get('id'))[0],
            'unit_price' => fake()->randomFloat(1, 0, 2),
            'quantity' => 1,
        ];
    }
}
