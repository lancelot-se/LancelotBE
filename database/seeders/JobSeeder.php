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
            'description' => 'Design compelling and memorable logos that represent a brands identity and values.',
            'job_salary' => 300000,
            'category_name' => json_encode(['Graphic Design', 'Art']),
            'job_image' => 'pics/logodesigner.webp',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 2
        Job::create([
            'job_name' => 'Website Branding',
            'client_name' => 'Phylo Co.',
            'description' => 'Create and implement cohesive branding strategies for websites to enhance brand identity and user engagement.',
            'job_salary' => 700000,
            'category_name' => json_encode(['Social Media']),
            'job_image' => 'pics/website-branding.jpg',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 3
        Job::create([
            'job_name' => 'Copywriting',
            'client_name' => 'Yuzuki entertainment',
            'description' => 'Write persuasive and engaging content to promote products, services, or ideas effectively.',
            'job_salary' => 650000,
            'category_name' => json_encode(['Copywriting', 'Media']),
            'job_image' => 'pics/copywriting.jpg',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 4
        Job::create([
            'job_name' => 'Auditing',
            'client_name' => 'Realty Tbk',
            'description' => 'Conduct thorough reviews of financial records and processes to ensure accuracy and compliance with regulations.',
            'job_salary' => 900000,
            'category_name' => json_encode(['Finance', 'Economy']),
            'job_image' => 'pics/financial-audit.jpg',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 5
        Job::create([
            'job_name' => 'Photographer',
            'client_name' => 'DSC Club',
            'description' => 'Capture high-quality images for various purposes, including events, portraits, and promotional materials.',
            'job_salary' => 400000,
            'category_name' => json_encode(['Photography']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-07-31'
        ]);

        // Pekerjaan 6
        Job::create([
            'job_name' => 'Script Writing',
            'client_name' => 'Lovelia Management',
            'description' => 'Write engaging and creative scripts for films, television shows, advertisements, and other media productions.',
            'job_salary' => 690000,
            'category_name' => json_encode(['Copywriting']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-06-28'
        ]);

         // Pekerjaan 7
         Job::create([
            'job_name' => 'Makeup Artist',
            'client_name' => 'LV Boutique',
            'description' => 'Apply makeup to enhance clients appearance for events, photoshoots, and special occasions.',
            'job_salary' => 1200000,
            'category_name' => json_encode(['Art', 'Makeup']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-07-20'
        ]);

         // Pekerjaan 8
         Job::create([
            'job_name' => 'Designing Logo',
            'client_name' => 'DYOR Beauty',
            'description' => 'Design compelling and memorable logos that represent a brands identity and values.',
            'job_salary' => 400000,
            'category_name' => json_encode(['Graphic Design', 'Art']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-06-25'
        ]);

         // Pekerjaan 9
         Job::create([
            'job_name' => 'Video Voiceover',
            'client_name' => 'Black Owl',
            'description' => 'Provide professional voiceover services for videos, ensuring clear communication and engaging delivery.',
            'job_salary' => 250000,
            'category_name' => json_encode(['Photography']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-09-10'
        ]);
         // Pekerjaan 10
         Job::create([
            'job_name' => 'Website Dev',
            'client_name' => 'Kin Truly Co.',
            'description' => 'Develop and maintain websites to ensure functionality, usability, and performance according to client specifications.',
            'job_salary' => 3400000,
            'category_name' => json_encode(['IT', 'Engineering']),
            'job_image' => 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg',
            'job_deadline'=>'2024-07-31'
        ]);



        
        
    }
}
