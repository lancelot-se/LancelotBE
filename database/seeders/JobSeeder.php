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
            'job_image' => 'pics/logodesigner.webp',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 2
        Job::create([
            'job_name' => 'Website Branding',
            'client_name' => 'Phylo Co.',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 700000,
            'category_name' => json_encode(['Social Media']),
            'job_image' => 'pics/website-branding.jpg',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 3
        Job::create([
            'job_name' => 'Copywriting',
            'client_name' => 'Yuzuki entertainment',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 650000,
            'category_name' => json_encode(['Copywriting', 'Media']),
            'job_image' => 'pics/copywriting.jpg',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 4
        Job::create([
            'job_name' => 'Auditing',
            'client_name' => 'Realty Tbk',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 900000,
            'category_name' => json_encode(['Finance', 'Economy']),
            'job_image' => 'pics/financial-audit.jpg',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 5
        Job::create([
            'job_name' => 'Photographer',
            'client_name' => 'DSC Club',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 400000,
            'category_name' => json_encode(['Photography']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 6
        Job::create([
            'job_name' => 'Script Writing',
            'client_name' => 'Lovelia Management',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 690000,
            'category_name' => json_encode(['Copywriting']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-06-28'
        ]);

         // Pekerjaan 7
         Job::create([
            'job_name' => 'Makeup Artist',
            'client_name' => 'LV Boutique',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 1200000,
            'category_name' => json_encode(['Art', 'Makeup']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-07-20'
        ]);

         // Pekerjaan 8
         Job::create([
            'job_name' => 'Designing Logo',
            'client_name' => 'DYOR Beauty',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 400000,
            'category_name' => json_encode(['Graphic Design', 'Art']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-06-25'
        ]);

         // Pekerjaan 9
         Job::create([
            'job_name' => 'Video Voiceover',
            'client_name' => 'Black Owl',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 250000,
            'category_name' => json_encode(['Photography']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-09-10'
        ]);
         // Pekerjaan 10
         Job::create([
            'job_name' => 'Website Dev',
            'client_name' => 'Kin Truly Co.',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eius est debitis nostrum amet rerum quidem dolore perspiciatis delectus, culpa exercitationem accusantium similique tenetur. Cupiditate rem quasi dignissimos repellat voluptatibus?',
            'job_salary' => 3400000,
            'category_name' => json_encode(['IT', 'Engineering']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-07-31'
        ]);



        
        
    }
}
