<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 1000),
            'status'  => $this->faker->randomElement(['available', 'borrowed']),
            'title'   => $this->faker->text(50),
            'author' => $this->faker->name(),
            'publish_date' =>$this->faker->date(),
            'description' => $this->faker->text(),
            'created_at' => now(),
        ];
    }
}
