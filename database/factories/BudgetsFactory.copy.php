<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\budgets>
 */
class BudgetFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $statusSelected = fake()->randomElement(['pending', 'delivered', 'rejected']);
    return [
      'customer_name' => fake()->name(),
      'status' => $statusSelected,
      'delivery_at' => $statusSelected === 'delivered' ? fake()->dateTime() : null,
    ];
  }
}
