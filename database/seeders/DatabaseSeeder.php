<?php

namespace Database\Seeders;

use App\Models\Dictionary;
use App\Models\DictionaryModification;
use App\Models\Entry;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        echo "> Seeding User\n";
        $user = User::factory()->create();

        echo "> Seeding Dictionary\n";
        $dictionary = Dictionary::factory()->count(30)->create();

        echo "> Seeding Entry\n";
        $entry = Entry::factory()->count(10)->create();

        echo "> Seeding DictinoaryModification\n";
        $dictionaryModification = DictionaryModification::factory()->count(10)->create();
    }
}
