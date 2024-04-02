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
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('section_id');
            $table->string('name');
            $table->text('description');
            $table->date('date');
            $table->time('time');
            $table->integer('duration');
            $table->enum('status', ['pending', 'ongoing', 'finished']);
            $table->timestamps();
            
            $table->foreignId('teacher_id')->constrained()->references('id')->on('teachers');
            $table->foreignId('section_id')->constrained()->references('id')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment');
    }
};
