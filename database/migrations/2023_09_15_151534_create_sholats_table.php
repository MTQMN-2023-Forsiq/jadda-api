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
        Schema::create('sholats', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_url');
            $table->text('description');
            $table->integer('left_wrist')->default(0);
            $table->integer('left_elbow')->default(0);
            $table->integer('left_shoulder')->default(0);
            $table->integer('left_hip')->default(0);
            $table->integer('left_knee')->default(0);
            $table->integer('left_ankle')->default(0);
            $table->integer('right_wrist')->default(0);
            $table->integer('right_elbow')->default(0);
            $table->integer('right_shoulder')->default(0);
            $table->integer('right_hip')->default(0);
            $table->integer('right_knee')->default(0);
            $table->integer('right_ankle')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sholats');
    }
};
