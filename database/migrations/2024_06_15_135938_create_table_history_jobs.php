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
        Schema::create('table_history_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('history_job_user_id');
            $table->string('history_job_image')->nullable();
            $table->string('history_job_name');
            $table->string('history_job_client_name');
            $table->text('history_job_description');
            $table->integer('history_job_salary');
            $table->json('history_job_category_name');
            $table->date('history_job_deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_history_jobs');
    }
};
