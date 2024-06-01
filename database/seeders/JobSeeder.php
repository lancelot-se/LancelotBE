<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        // Pekerjaan 1
        Job::create([
            'job_name' => 'Logo Designing',
            'client_name' => 'Holland Creatindo',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 300000,
            'category_name' => json_encode(['Graphic Design', 'Art']),
            'job_image' => 'pics/logodesigner.webp'
        ]);

        // Pekerjaan 2
        Job::create([
            'job_name' => 'Website Branding',
            'client_name' => 'Phylo Co.',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 700000,
            'category_name' => json_encode(['Social Media']),
            'job_image' => 'pics/website-branding.jpg'
        ]);

        // Pekerjaan 3
        Job::create([
            'job_name' => 'Copywriting',
            'client_name' => 'Yuzuki entertainment',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 650000,
            'category_name' => json_encode(['Copywriting', 'Media']),
            'job_image' => 'pics/copywriting.jpg'
        ]);

        // Pekerjaan 4
        Job::create([
            'job_name' => 'Auditing',
            'client_name' => 'Realty Tbk',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 900000,
            'category_name' => json_encode(['Finance', 'Economy']),
            'job_image' => 'pics/financial-audit.jpg'
        ]);

        // Pekerjaan 5
        Job::create([
            'job_name' => 'Photographer',
            'client_name' => 'DSC Club',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 400000,
            'category_name' => json_encode(['Photography']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg'
        ]);
    }
}
