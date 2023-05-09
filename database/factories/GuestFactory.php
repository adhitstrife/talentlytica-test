<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email()
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Guest $guest) {
            $guest->score()->create([
                'x_value' => $this->faker->numberBetween(1, 33),
                'y_value' => $this->faker->numberBetween(1, 23),
                'z_value' => $this->faker->numberBetween(1, 18),
                'w_value' => $this->faker->numberBetween(1, 13)
            ]);
        });
    }

}
