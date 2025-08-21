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
        Schema::table('students', function (Blueprint $table) {
    $table->string('department_name', 50);
    $table->boolean('student_status');
    $table->bigInteger('result')->unsigned();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
    $table->string('department_name', 50);
    $table->boolean('student_status');
    $table->bigInteger('result')->unsigned();
});
    }
};
