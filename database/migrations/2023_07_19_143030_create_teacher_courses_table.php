<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('teacher_courses', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                
                // Define foreign keys
                $table->string('teacher_id');
                // Add foreign key constraint for teacher_id with onDelete cascade
                $table->foreign('teacher_id')->references('teacher_id')->on('teachers')->onDelete('cascade');
                // Add foreign key constraint for course_id with onDelete cascade
                $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
    
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_courses');
    }

};
