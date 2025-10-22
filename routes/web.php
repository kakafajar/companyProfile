<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminDashboardController;


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
    return view('home');
})->name('home');

// Public user
Route::get('/jobs/{job}/apply', [ApplicationController::class, 'create'])->name('applications.create');
Route::post('/jobs/{job}/apply', [ApplicationController::class, 'store'])->name('applications.store');

Route::get('/admin/jobs/{job}/applications', [CareerController::class, 'applications'])
     ->name('admin.jobs.applications');

// Halaman user
Route::get('/career/jobs', [CareerController::class, 'jobs'])->name('career.jobs');

// Admin CRUD
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/jobs', [CareerController::class, 'index'])->name('admin.jobs.index');
    Route::get('/jobs/create', [CareerController::class, 'create'])->name('admin.jobs.create');
    Route::post('/jobs', [CareerController::class, 'store'])->name('admin.jobs.store');
    Route::get('/jobs/{job}/edit', [CareerController::class, 'edit'])->name('admin.jobs.edit');
    Route::put('/admin/jobs/{job}', [CareerController::class, 'update'])->name('admin.jobs.update');
    Route::delete('/jobs/{job}', [CareerController::class, 'destroy'])->name('admin.jobs.destroy');
});

Route::get('/applications/{id}/cv', [ApplicationController::class, 'downloadCv'])->name('applications.downloadCv');

Route::get('admin/dashboard', [AdminDashboardController:: class, 'index'])->name('admin.dashboard');

