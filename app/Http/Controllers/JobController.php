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
    public function indexJob()
    {
        $jobs = Job::all(); // Ambil semua data job dari database
        return view('homepage', compact('jobs'));
    }
    public function showDetailJob($id)
    {
        $jobdetail=Job::findOrFail($id);
        return view('seejobdetail1', compact('jobdetail'));
    }
    public function showDetailJob2($id)
    {
        $jobdetail = Job::findOrFail($id); 
        return view('seejobdetail2', compact('jobdetail'));
        return redirect()->route('jobs.showDetail', $id);
    }

}

