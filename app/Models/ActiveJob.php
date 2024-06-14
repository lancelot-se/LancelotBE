<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActiveJob extends Model
{
    protected $table = 'table_active_jobs'; // Nama tabel sesuai dengan migrasi

    protected $fillable = [
        'job_image',
        'job_name',
        'client_name',
        'description',
        'job_salary',
        'category_name',
        'job_deadline',
    ];

    protected $casts = [
        'category_name' => 'json', // Meng-cast category_name sebagai tipe JSON
    ];


}
