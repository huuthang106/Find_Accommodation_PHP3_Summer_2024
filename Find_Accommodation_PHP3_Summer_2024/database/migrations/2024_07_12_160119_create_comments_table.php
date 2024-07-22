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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->boolean('status')->default(1);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Khóa ngoại với hành động on delete cascade
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade'); 
            $table->foreignId('parent_id')->nullable()->constrained('comments')->onDelete('cascade'); // Thêm cột parent_id
            $table->foreignId('blog_id')->nullable()-> constrained('blogs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
