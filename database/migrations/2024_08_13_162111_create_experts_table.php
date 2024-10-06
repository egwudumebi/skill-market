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
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('profile')->nullable();
            $table->string('gender')->nullable();
            $table->string('username')->unique(); // Add username field if needed
            $table->string('password'); // Add password field if authentication is needed
            $table->text('bio')->nullable(); // Make bio nullable if not always required
            $table->foreignId('domain_id')->nullable();
            $table->json('sub_skills')->nullable();
            $table->string('company')->nullable();
            $table->string('job_title')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('whatsapp')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experts');
    }
};
