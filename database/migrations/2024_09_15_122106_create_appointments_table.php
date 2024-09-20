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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name field
            $table->string('email'); // Email field
            $table->string('phone'); // Phone field
            $table->dateTime('date'); // Appointment date
            $table->string('department'); // Department field
            $table->string('doctor'); // Doctor field
            $table->text('message')->nullable(); // Message field, nullable
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
