<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Seeders\JobSeeder;
use Database\Seeders\CategorySeeder;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        $jobSeeder = new JobSeeder();
        $jobSeeder->run();
        $jobs = $jobSeeder->jobs;

        $categorySeeder = new CategorySeeder();
        $categorySeeder->run();
        $categories = $categorySeeder->categories;

        $job = $jobs[array_rand($jobs)]; // Ambil satu pekerjaan secara acak
        $category = $categories[array_rand($categories)]; // Ambil satu kategori secara acak

        return [
            'job_image' => $job['job_image'], // Menggunakan gambar dari seeder JobSeeder
            'job_name' => $job['job_name'],
            'client_name' => $job['client_name'],
            'description' => $job['description'],
            'job_salary' => $job['job_salary'],
            'category_name' => json_encode([$category['category_name']]), // Menggunakan kategori dari seeder CategorySeeder
        ];
    }
}
