<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'category_name' => $this->faker->unique()->randomElement([
                'Graphic Design',
                'Social Media',
                'Finance',
                'IT & Engineering',
                'Voice Over',
                'Art',
                'Copywriting',
                'Media',
                'Economy',
                'Photography',
            ]),
        ];
    }
}
