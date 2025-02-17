<?php
// created with command:  php artisan make:factory ReviewFactory --model=Review
namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => null,
            'review' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('created_at', 'now'),
        ];
    }

    public function good(): ReviewFactory|Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(4, 5)
            ];
        });
    }

    public function average(): ReviewFactory|Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(2, 5)
            ];
        });
    }

    public function bad(): ReviewFactory|Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(1, 3)
            ];
        });
    }
}
