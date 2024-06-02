<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;

class HomepageController extends Controller
{
    public function indexHomepage()
    {
        $jobs = Job::all();
        $categories = Category::all();
        
        return view('homepage', compact('jobs', 'categories'));
    }
}