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
        Schema::create('students', function (Blueprint $table) {
            $table->string('student_id')->primary();
            $table->string('password')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('contact_no')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('school')->nullable();
            $table->string('whatsapp_no')->nullable();    
            $table->enum('payment_option', ['online', 'manual'])->default('online')->nullable();  
            $table->string('student_profile_photo')->nullable();        
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
