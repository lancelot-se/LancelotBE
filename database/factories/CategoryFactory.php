<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    protected static $categories = [
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
    ];

    public function definition()
    {
        if (empty(self::$categories)) {
            throw new \Exception('No more unique categories available.');
        }

        // Take the first category from the list and remove it
        $categoryName = array_shift(self::$categories);

        return [
            'category_name' => $categoryName,
        ];
    }
}
