<?php

use App\Models\User;
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
        Schema::create('dictionaries', function (Blueprint $table) {
            $table->string('id')->primary();
            // $table->foreignUuid('user')->references('id')->on('users')->onDelete('cascade');
            $table->foreignIdFor(User::class)->onDelete('cascade');
            $table->string('name');
            $table->longText('description');
            $table->timestamps();
            $table->timestamp('visited_at')->nullable();
            $table->integer('votes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dictionaries');
    }
};
