<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(12),
            'logo' => $this->faker->imageUrl(),
            'tags' => $this->faker->text(5),
            'company' => $this->faker->text(10),
            'location' => $this->faker->text(5),
            'email' => $this->faker->email(),
            'website' => $this->faker->text(10),
            'description' => $this->faker->text(),
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
