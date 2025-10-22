@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold mb-4">Admin Dashboard</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Lowongan</h5>
                    <p class="card-text fs-3 fw-bold">{{ $totalJobs }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Pelamar</h5>
                    <p class="card-text fs-3 fw-bold">{{ $totalApplications }}</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <h4>Daftar Lowongan & Jumlah Pelamar</h4>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama Lowongan</th>
                <th>Jumlah Pelamar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{ $job->title }}</td>
                <td>{{ $job->applications_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
