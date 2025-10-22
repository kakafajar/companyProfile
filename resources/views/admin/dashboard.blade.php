@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold mb-4">Admin Dashboard</h2>

    <div class="alert alert-info">
        Selamat datang di halaman admin, {{ auth()->user()->name ?? 'Admin' }}!
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Jobs</h5>
                    <p class="card-text fs-3 fw-bold">{{ \App\Models\Job::count() }}</p>
                </div>
            </div>
        </div>
        <!-- bisa ditambah card lain nanti -->
    </div>
</div>
@endsection
