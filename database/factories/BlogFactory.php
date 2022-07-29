<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'post_title'=> $this->faker->sentence(),
            'post_slug'=> $this->faker->sentence(),
            'user_id' => $this->faker->unique()->numberBetween(1,5000),

        ];
    }
}
