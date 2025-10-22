<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $totalJobs = Job::count();
        $totalApplications = Application::count();

        $jobs = Job::withCount('applications')->get();

        return view('admin.dashboard', compact('totalJobs', 'totalApplications', 'jobs'));
    }
}
