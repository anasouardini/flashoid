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
        Schema::create('entries', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignIdFor(Dictionary::class)->onDelete('cascade');
            $table->string('front');
            $table->longText('back');
            $table->enum('status', ['draft', 'researched', 'familiarized', 'grasped', 'applied']);
            $table->integer('views');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
