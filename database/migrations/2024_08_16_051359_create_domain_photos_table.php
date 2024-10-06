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
        Schema::create('domain_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_id')->constrained();
            $table->string('picture_1');
            $table->string('picture_2');
            $table->string('picture_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_photos');
    }
};
