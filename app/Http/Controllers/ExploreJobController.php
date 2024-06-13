<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
class ExploreJobController extends Controller
{
    public function indexExploreJob()
    {
        $jobs = Job::all();
        $categories = Category::all();
        
        return view('explorejobs', compact('jobs', 'categories'));
    }
}
