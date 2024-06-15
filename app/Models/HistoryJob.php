<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryJob extends Model
{
    protected $table = 'table_history_jobs'; // Nama tabel sesuai dengan migrasi

    protected $fillable = [
        'history_job_user_id',
        'history_job_image',
        'history_job_name',
        'history_job_client_name',
        'history_job_description',
        'history_job_salary',
        'history_job_category_name',
        'history_job_deadline',
    ];

    protected $casts = [
        'category_name' => 'json', // Meng-cast category_name sebagai tipe JSON
    ];

}
