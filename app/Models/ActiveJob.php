<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActiveJob extends Model
{
    protected $table = 'table_active_jobs'; // Nama tabel sesuai dengan migrasi

    protected $fillable = [
        'active_job_user_id',
        'active_job_image',
        'active_job_name',
        'active_job_client_name',
        'active_job_description',
        'active_job_salary',
        'active_job_category_name',
        'active_job_deadline',
    ];

    protected $casts = [
        'category_name' => 'json', // Meng-cast category_name sebagai tipe JSON
    ];


}
