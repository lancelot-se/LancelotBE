<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;
class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all(); // Ambil semua data job dari database
        return view('homepage', compact('jobs'));
    }
}

