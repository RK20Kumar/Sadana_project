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
        Schema::create('online_classes', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('online_classes');
    }
};
