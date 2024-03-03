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
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            
            
            $table->date('attendance_date');
            $table->enum('status', ['present', 'absent']);
            $table->timestamps();
            $table->foreignId('teacher_course_id')->constrained('teacher_courses')->onDelete('cascade');

            $table->string('student_id'); //key ek string nisa define kala
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendences');
    }
};
