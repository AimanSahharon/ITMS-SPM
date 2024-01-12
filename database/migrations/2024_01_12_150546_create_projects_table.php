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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('ProjectID')->nullable();
            //$table->foreignId('BUID')->constrained('bunits');
            $table->string('BUID')->nullable();
            $table->string('Title')->nullable();
            $table->string('System_Owner')->nullable();
            $table->string('PIC')->nullable();
            $table->string('Lead_Developer')->nullable();
            $table->date('Start_Date')->nullable();
            $table->date('End_Date')->nullable();
            $table->string('Duration')->nullable();
            $table->string('Status')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
