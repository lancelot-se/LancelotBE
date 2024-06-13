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
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/homepage', function () {
        return view('homepage');
    });
    Route::get('/seejobdetail1', function () {
        return view('seejobdetail1');
    });
    Route::get('/editprofile', function () {
        return view('editprofile');
    });
    Route::get('/explorejobs', function () {
        return view('explorejobs');
    });
    //testing
    Route::get('/testing', function () {
        return view('testing');
    });
    // Route::get('/homepage', [JobController::class, 'indexJob']);
    Route::get('/homepage', [HomepageController::class, 'indexHomepage']);
    Route::get('/explorejobs', [ExploreJobController::class, 'indexExploreJob']);
    Route::get('/user/{id}/edit', [UserProfileController::class, 'edit'])->name('user.edit');
    Route::post('/user/{id}/update', [UserProfileController::class, 'updateProfile'])->name('user.update');
    Route::get('/jobs/{id}', [JobController::class, 'showDetailJob'])->name('jobs.showDetail');
});

require __DIR__.'/auth.php';
