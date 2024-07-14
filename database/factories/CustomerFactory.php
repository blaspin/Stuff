<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = explode(' ', fake()->name());
        return [
            'first_name' => $name[0],
            'last_name' => $name[1],
            'company' => fake()->optional()->company(),
            'address' => fake()->streetName() . fake()->buildingNumber(),
            'city' => fake()->city(),
            'state' => fake()->optional()->stateAbbr(),
            'country' => fake()->country(),
            'postal_code' => fake()->postcode(),
            'phone' => fake()->phoneNumber(),
            'fax' => fake()->phoneNumber(),
            'email' => fake()->unique()->email(),
            'support_employee_id' => fake()->randomElements(Employee::get('id'))[0],
        ];
    }
}
