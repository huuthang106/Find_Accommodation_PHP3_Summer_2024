<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->float('price',10,2);
            $table->string('phone',13);
            $table->string('address');
            $table->integer('quantity')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->integer('view')->default(0);
            $table->boolean('status')->default(1);
            $table->foreignId('acreage_id')->nullable()->constrained('acreages')->onDelete('set null'); // Khóa ngoại với hành động onDelete set null cho acreages và cho phép null
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Khóa ngoại với hành động on delete cascade
            $table->foreignId('price_id')->nullable()->constrained('prices')->onDelete('set null');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
            $table->timestamps(); // tự tạo create_at và update_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
