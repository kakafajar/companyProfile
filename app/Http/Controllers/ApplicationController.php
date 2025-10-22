<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // Form apply
    public function create(Job $job)
    {
        return view('applications.create', compact('job'));
    }

    // Simpan data apply
    public function store(Request $request, Job $job)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'cover_letter' => 'nullable|string',
            'CV' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('CV')) {
            $validated['CV'] = $request->file('CV')->store('cvs', 'public');
        }

        $validated['job_id'] = $job->id;

        Application::create($validated);

        return redirect()->route('applications.create', $job)->with('success', 'Lamaran berhasil dikirim!');
    }

    // Admin lihat semua aplikasi
    public function index()
    {
        $applications = Application::with('job')->latest()->get();
        return view('admin.applications.index', compact('applications'));
    }


        public function downloadCv($id)
    {
        $app = Application::findOrFail($id);

        if ($app->CV && \Storage::disk('public')->exists($app->CV)) {
            return response()->download(storage_path('app/public/'.$app->CV));
        }

        return redirect()->back()->with('error', 'CV tidak ditemukan');
    }

    

    // Tampilkan daftar pelamar untuk 1 job terten
}

