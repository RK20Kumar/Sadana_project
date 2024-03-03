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
        // Create a new table named 'schedules'
        Schema::create('schedules', function (Blueprint $table) {
            // Define an auto-incrementing primary key column 'id'
            $table->id();
            // Define a string column 'class_type' that can be nullable
            $table->string('class_type')->nullable();
            $table->string('title')->nullable();
            $table->text('about_class')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->timestamps();

             //Define foreign key
             $table->foreignId('teacher_course_id')->constrained('teacher_courses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'schedules' table if it exists
        Schema::dropIfExists('schedules');
    }
};
