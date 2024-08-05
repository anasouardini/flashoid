<?php

use App\Models\DictionaryEntry;
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
        Schema::create('dictionary_soft_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DictionaryEntry::class)->nullable();
            $table->string('front');
            $table->string('back');
            $table->string('action'); // add, update, delete
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dictionary_soft_entries');
    }
};
