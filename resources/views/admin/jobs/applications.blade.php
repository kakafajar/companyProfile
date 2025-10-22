@extends('layouts.app', ['hideNavbar' => true])

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Applications for: {{ $job->title }}</h2>

    @if($applications->isEmpty())
        <p>No applications yet.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Cover Letter</th>
                    <th>CV</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applications as $app)
                <tr>
                    <td>{{ $app->name }}</td>
                    <td>{{ $app->email }}</td>
                    <td>{{ $app->phone }}</td>
                    <td>{{ Str::limit($app->cover_letter, 50) }}</td>
                    <td>
                        @if($app->CV)
                            <a href="{{ route('applications.downloadCv', $app->id) }}">Download</a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary mt-3">← Back</a>
</div>
@endsection
