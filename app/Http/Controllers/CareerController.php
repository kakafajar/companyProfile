<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function jobs(){
        $jobs = Job::latest()->get();
        return view('career_jobs', compact('jobs'));
    }


    public function index(){
        $jobs = Job::all();
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create(){
        return view('admin.jobs.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'type' => 'required',
        ]);

        Job::create($request->all());

        return redirect()->route('admin.jobs.index')->with(['success' => 'Job berhasil dibuat']);
    }



    public function edit(Job $job){
        return view('admin.jobs.edit', compact('job'));
    }


    public function update(Request $request, Job $job)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'type' => 'required', // kalau kamu punya field type
        ]);

        // Update data
        $job->update($request->all());

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('admin.jobs.index')->with('success', 'Job berhasil diperbarui!');
    }



        public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index')->with('success', 'Job deleted successfully.');
    }

        public function applications(Job $job)
    {
        $applications = $job->applications; // ambil relasi pelamar
        return view('admin.jobs.applications', compact('job', 'applications'));
    }


}
