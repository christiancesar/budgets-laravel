<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
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
    $statusSelected = fake()->randomElement(['pendente', 'entregue', 'cancelado']);
    $uuid = fake()->uuid();

    return [
      'id' => $uuid,
      'short_id' => strtoupper(substr($uuid, -5)),
      'customer_name' => fake()->name(),
      'status' => $statusSelected,
      'delivery_at' => $statusSelected === 'entregue' ? fake()->dateTime() : null,
    ];
  }
}
