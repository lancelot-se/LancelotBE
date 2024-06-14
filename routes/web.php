<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ExploreJobController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ApplyJobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('splashscreen');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/homepage', [HomepageController::class, 'indexHomepage']);
    Route::get('/explorejobs', [ExploreJobController::class, 'indexExploreJob']);

    // Route to edit user profile
    Route::get('/user/{id}/edit', [UserProfileController::class, 'edit'])->name('user.edit');
    Route::post('/user/{id}/update', [UserProfileController::class, 'updateProfile'])->name('user.update');

    // Route to view job details
    Route::get('/jobs/{id}', [JobController::class, 'showDetailJob'])->name('jobs.showDetail');

    // Route to show job application form
    Route::get('/jobs/{id}/apply', [JobController::class, 'showDetailJob2'])->name('jobs.apply');

    // Route to process job application
    // Route::post('/activejobs/{id}/apply', [ApplyJobController::class, 'applyJob'])->name('activejobs.apply');
});

require __DIR__.'/auth.php';
