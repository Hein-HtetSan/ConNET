<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $address = ['yangon', 'mandalay', 'pyay', 'bago', 'pyin oo lwin', 'shan'];
        return [
            'title' => $this->faker->sentence(8),
            'desc' => $this->faker->text(200),
            'price' => rand(1000, 50000),
            'address' => $address[array_rand($address)],
            'rating' => rand(0, 5)
        ];
    }
}
