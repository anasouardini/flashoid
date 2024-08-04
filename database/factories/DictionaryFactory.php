<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dictionary>
 */
class DictionaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->first();
        return [
            'user_id' => $user->id,
            'name' => "Test Dictionary {$this->faker->randomNumber()}",
            'description' => 'Test Description',
            'visited_at' => $this->faker->dateTimeThisMonth(),
            'votes' => 0,
        ];
    }
}
