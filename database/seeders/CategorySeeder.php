<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Logic untuk menambahkan data kategori
        // Contoh:
        Category::factory()->count(11)->create();
        // Tambahkan kategori lainnya sesuai kebutuhan
    }
}
