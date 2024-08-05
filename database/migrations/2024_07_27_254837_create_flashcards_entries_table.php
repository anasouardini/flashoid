<?php

use App\Models\Dictionary;
use App\Models\DictionaryEntry;
use App\Models\DictionarySoftEntry;
use App\Models\Flashcards;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flashcards_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Flashcards::class);
            $table->foreignIdFor(DictionaryEntry::class)->nullable();
            $table->foreignIdFor(DictionarySoftEntry::class)->nullable();
            $table->integer('status');
            $table->integer('views');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flashcards_entries');
    }
};
