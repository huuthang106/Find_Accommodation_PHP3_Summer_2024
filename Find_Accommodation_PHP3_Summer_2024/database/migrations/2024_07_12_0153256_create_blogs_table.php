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
       // Migration file for creating blogs table
Schema::create('blogs', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');  // Changed from string to text for better description handling
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    $table->integer('status')->default(1);  // Add default value for status
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
