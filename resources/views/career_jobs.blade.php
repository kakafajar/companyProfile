@extends('layouts.app', ['hideNavbar' => true])

@section('content')
<div class="container py-5">

    <a href="{{ route('home') }}" class="btn btn-outline-primary mb-4">
        ← Back to Home
    </a>

    <h2 class="fw-bold mb-4">Daftar Lowongan Pekerjaan</h2>

    <div class="row">
        @forelse($jobs as $job)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->title }}</h5>
                        <p class="card-text">{{ Str::limit($job->description, 120) }}</p>
                        <p class="text-muted"><strong>Location:</strong> {{ $job->location }}</p>
                        <span class="badge bg-dark">{{ $job->type }}</span>
                        <a href="{{ route('applications.create', $job) }}" class="btn btn-primary mt-3">
                        Apply
                        </a>

                    </div>
                </div>
            </div>
        @empty
            <p>No jobs available at the moment.</p>
        @endforelse
    </div>
</div>
@endsection
