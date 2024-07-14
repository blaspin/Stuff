<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = explode(' ', fake()->name());
        $reports_to = count(Employee::get('id')) > 0 ? fake()->randomElements(Employee::get('id'))[0] : null;
        return [
            'first_name' => $name[0],
            'last_name' => $name[1],
            'title' => fake()->unique()->word(),
            'birth_date' => fake()->date(),
            'hire_date' => fake()->date(),
            'address' => fake()->streetName() . fake()->buildingNumber(),
            'city' => fake()->city(),
            'state' => fake()->stateAbbr(),
            'country' => fake()->country(),
            'postal_code' => fake()->postcode(),
            'phone' => fake()->phoneNumber(),
            'fax' => fake()->phoneNumber(),
            'email' => fake()->unique()->email(),
            'reports_to' => $reports_to,
        ];
    }
}
