<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['job_image','job_name', 'client_name', 'description', 'job_salary', 'category_name', 'job_deadline'];

    protected $casts = [
        'category_name' => 'array',
    ];
}
