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
        Schema::create('subject_approvals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('student_id');
            $table->enum('status', ['pending', 'approved', 'rejected']);
            $table->integer('calification');
            $table->timestamps();

            $table->foreignId('subject_id')->constrained()->references('id')->on('subjects');
            $table->foreignId('student_id')->constrained()->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_approval');
    }
};
