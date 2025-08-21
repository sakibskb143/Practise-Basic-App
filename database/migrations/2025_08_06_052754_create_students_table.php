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
        Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('name', 50);
    $table->integer('semester')->default(1);
    $table->string('email', 100)->unique();
    $table->string('phone', 20)->nullable();            // Added phone number field (max 20 chars)
    $table->date('date_of_birth')->nullable();          // Added date_of_birth field
    $table->string('address', 255)->nullable();         // Added address field (max 255 chars)
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
