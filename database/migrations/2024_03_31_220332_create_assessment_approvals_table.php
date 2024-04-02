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
        Schema::create('assessment_approvals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assessment_id');
            $table->unsignedBigInteger('student_id');
            $table->integer('value');
            $table->enum('status', ['pending', 'approved', 'rejected']);
            $table->timestamps();

            $table->foreignId('assessment_id')->constrained()->references('id')->on('assessments');
            $table->foreignId('student_id')->constrained()->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_approval');
    }
};
