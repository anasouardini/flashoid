<?php

use App\Models\Dictionary;
use App\Models\FlashcardsEntry;
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
        Schema::create('flashcards_entries_metadata', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignIdFor(FlashcardsEntry::class)->onDelete('cascade');
            $table->enum('action', ['create', 'read', 'status_update', 'delete']);
            // $table->enum('updated_column', ['front', 'back', 'status', null]);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flashcards_entries_metadata');
    }
};
