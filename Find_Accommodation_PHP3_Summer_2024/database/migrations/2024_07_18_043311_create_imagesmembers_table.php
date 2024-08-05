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
        Schema::create('imagesmembers', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->foreignId('memberregistration_id')->constrained('memberregistrations');
            // $table->string('idenerregistra_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagesmembers');
    }
};
