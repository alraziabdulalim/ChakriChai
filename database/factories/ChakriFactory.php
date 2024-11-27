<?php

namespace Database\Factories;

use App\Enums\EmploymentType;
use Illuminate\Support\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chakri>
 */
class ChakriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->realText(50),
            'company_name' => fake()->company(),
            'employment_type' => fake()->randomElement(EmploymentType::cases())->value,
            'role' => fake()->jobTitle(),
            'apply_url' => fake()->url(),
            'company_logo' => fake()->imageUrl(100, 100),
            'description' => fake()->realText(600),
            'salary' => Number::currency(fake()->numberBetween(1000, 5000)) . ' - ' . Number::currency(fake()->numberBetween(15000, 50000)),
        ];
    }
}
