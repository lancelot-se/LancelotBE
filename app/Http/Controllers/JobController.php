<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\ActiveJob; // Import ActiveJob model
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function indexJob()
    {
        $jobs = Job::all();
        return view('homepage', compact('jobs'));
    }

    public function showDetailJob($id)
    {
        $jobdetail = Job::findOrFail($id);
        return view('seejobdetail1', compact('jobdetail'));
    }

    public function showDetailJob2($id)
    {
        $jobdetail = Job::findOrFail($id);
        return view('seejobdetail2', compact('jobdetail'));
    }

    public function showSuccess($id)
    {
        $jobdetail = Job::findOrFail($id);
        return view('success', compact('jobdetail'));
    }
    
    public function applyJob(Request $request, $id)
    {
        if((Auth::id())){
            $user=auth()->user();
            $job=Job::findOrFail($id);
            $activeJob = new ActiveJob();
            $activeJob->active_job_user_id=$user->id;
            $activeJob->active_job_image = $job->job_image;
            $activeJob->active_job_name = $job->job_name;
            $activeJob->active_job_client_name = $job->client_name;
            $activeJob->active_job_description = $job->description;
            $activeJob->active_job_salary = $job->job_salary;
            $activeJob->active_job_category_name = $job->category_name;
            $activeJob->active_job_deadline = $job->job_deadline;
            $activeJob->save();
            return redirect()->route('success', ['id' => $job->id])->with('success', 'Lamaran pekerjaan berhasil.');

        }
        
    }
    public function showActiveJobs(){
        $user=auth()->user();
        $activeJob=ActiveJob::where('active_job_user_id', $user->id)->get();
        return view('activejobs', compact('activeJob'));

    }
    public function showFinishJob($id){
        $activeJob = ActiveJob::findOrFail($id);
        return view('finish', compact('activeJob'));
    }

    
}
