<?php

use App\Models\Dictionary;
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
        Schema::create('dictionary_modifications', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignIdFor(Dictionary::class)->onDelete('cascade');
            $table->enum('action', ['create', 'read', 'status_update', 'delete']);
            // $table->enum('updated_column', ['front', 'back', 'status', null]);
            $table->enum('status', ['draft', 'researched', 'familiarized', 'grasped', 'applied']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dictionary_modifications');
    }
};
