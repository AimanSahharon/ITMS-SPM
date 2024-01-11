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
            $table->string('ProjectID');
            $table->foreignId('BUID')->constrained('bunits');
            $table->string('Title');
            $table->string('System_Owner');
            $table->string('PIC');
            $table->string('Lead_Developer');
            $table->date('Start_Date');
            $table->date('End_Date');
            $table->string('Duration');
            $table->string('Status');
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
