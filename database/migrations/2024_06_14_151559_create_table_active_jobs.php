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
            $table->unsignedBigInteger('active_job_user_id');
            $table->string('active_job_image')->nullable();
            $table->string('active_job_name');
            $table->string('active_job_client_name');
            $table->text('active_job_description');
            $table->integer('active_job_salary');
            $table->json('active_job_category_name');
            $table->date('active_job_deadline');
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
