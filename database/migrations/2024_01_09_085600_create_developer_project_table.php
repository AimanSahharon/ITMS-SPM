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
        Schema::create('developer_project', function (Blueprint $table) {
            $table->id();
            $table->foreignId('developer_id')->constrained('developers');
            $table->foreignId('project_id')->constrained('projects'); //constrained to subject table and cannot insert data but choose data from subject table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developer_project');
    }
};
