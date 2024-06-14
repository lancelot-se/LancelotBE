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
        Schema::create('table_active_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_image')->nullable();
            $table->string('job_name');
            $table->string('client_name');
            $table->text('description');
            $table->integer('job_salary');
            $table->json('category_name');
            $table->date('job_deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_active_jobs');
    }
};
