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
        Schema::create('lead_developers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ProjectID')->constrained('projects');
            $table->foreignId('DeveloperID')->constrained('developers');
            $table->string('Name');
            $table->string('Email');
            $table->string('PhoneNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_developers');
    }
};
