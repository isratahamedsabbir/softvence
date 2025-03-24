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
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->longText('description')->nullable();
            $table->longText('credintials')->nullable();
            $table->longText('features')->nullable();
            $table->longText('note')->nullable();
            $table->string('url')->nullable();
            $table->string('github')->nullable();
            $table->json('metadata')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('type', ['personal', 'company', 'academic'])->default('personal');
            $table->enum('status', ['active', 'inactive'])->default('active');
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
