<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ExploreJobController;
use App\Http\Controllers\UserProfileController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', function () {
    return view('splashscreen');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/testing', function () {
        return view('testing');
    });
    // Homepage and Explore Jobs
    Route::get('/homepage', [HomepageController::class, 'indexHomepage']);
    Route::get('/explorejobs', [ExploreJobController::class, 'indexExploreJob']);

    // User Profile
    Route::get('/user/{id}/edit', [UserProfileController::class, 'edit'])->name('user.edit');
    Route::post('/user/{id}/update', [UserProfileController::class, 'updateProfile'])->name('user.update');

    // Job Routes
    Route::get('/jobs/{id}', [JobController::class, 'showDetailJob'])->name('jobs.showDetail');
    Route::get('/jobs/{id}/apply', [JobController::class, 'showDetailJob2'])->name('jobs.apply');
    Route::post('/apply-job/{id}', [JobController::class, 'applyJob'])->name('apply.job');

    // Success Route
    Route::get('/success/{id}', [JobController::class, 'showSuccess'])->name('success');

    // active jobs route
    Route::get('/showactivejobs', [JobController::class, 'showActiveJobs'])->name('showactivejobs');
    Route::get('/activejobs/{id}', [JobController::class, 'showFinishJob'])->name('finish.job');

});

// Include authentication routes
require __DIR__.'/auth.php';
