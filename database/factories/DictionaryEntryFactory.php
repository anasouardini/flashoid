<?php

namespace Database\Factories;

use App\Models\Dictionary;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class DictionaryEntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dictionary = Dictionary::all()->first();
        return [
            'dictionary_id' => $dictionary->id,
            'front' => 'Thema',
            'back' => 'Look',
            'status' => $this->faker->randomElement(['draft', 'researched', 'familiarized', 'grasped', 'applied']),
            'views' => 0
        ];
    }
}
