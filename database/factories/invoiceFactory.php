<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\invoice>
 */
class invoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_date' => fake()->date(),
            'billing_address' => fake()->streetName() . fake()->buildingNumber(),
            'billing_city' => fake()->city(),
            'billing_state' => fake()->optional()->stateAbbr(),
            'billing_country' => fake()->country(),
            'billing_postal_code' => fake()->postcode(),
            'total' => fake()->randomFloat(1, 0, 2),
            'customer_id' => fake()->randomElements(Customer::get('id'))[0],
        ];
    }
}
