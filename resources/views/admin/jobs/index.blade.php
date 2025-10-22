@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold mb-4">Manage Jobs</h2>
    <a href="{{ route('admin.jobs.create') }}" class="btn btn-dark mb-3">+ Add Job</a>

    <table class="table table-bordered bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{ $job->title }}</td>
                <td>{{ $job->location }}</td>
                <td>{{ $job->type }}</td>
                <td>
                    <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this job?')">Delete</button>
                    </form>
                    <a href="{{ route('admin.jobs.applications', $job->id) }}" class="btn btn-sm btn-info">View Applications</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
