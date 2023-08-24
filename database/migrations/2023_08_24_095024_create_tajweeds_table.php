<?php

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
        Schema::create('tajweeds', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->string("example_url");
            $table->string("tajweed_letter_url");
            $table->string("audio_url");
            $table->timestamps();
            $table->foreignId("category_tajweed_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tajweeds');
    }
};
