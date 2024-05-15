<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        return [
            "name" => fake()->name(),
            "product_id" => rand(1, 100),
            "date" => date("Y-m-d H:i:s"),
            "date_time" => date("Y-m-d H:i:s"),
            "amount" => rand(1, 1000),
            "tax" => rand(0.00, 1000.00),
            "piece" => rand(1, 100),
            "time" => date("H:i:s"),
        ];
    }
}
