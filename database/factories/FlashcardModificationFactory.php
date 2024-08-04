<?php

namespace Database\Factories;

use App\Models\Dictionary;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DictionaryModification>
 */
class FlashcardModificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dictinoary = Dictionary::all()->first();
        return [
            'dictionary_id' => $dictinoary->id,
            'action' => $this->faker->randomElement(['create', 'read', 'update', 'delete']),
            'updated_property' => $this->faker->randomElement(['front', 'back', 'status']),
        ];
    }
}
