<?php

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
        Schema::create('flashcards_statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Flashcards::class)->onDelete('cascade');
            $table->integer('entries_count');
            $table->integer('viewed_entries_count');
            $table->json('status_stats'); // {status1 : 10, status2: 13}
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flashcards_statistics');
    }
};
