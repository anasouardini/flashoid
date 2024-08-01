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
        Schema::create('entries_modifications', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignIdFor(Dictionary::class)->onDelete('cascade');
            $table->enum('action', ['create', 'read', 'update', 'delete']);
            $table->enum('updated_property', ['front', 'back', 'status', null]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries_modifications');
    }
};
