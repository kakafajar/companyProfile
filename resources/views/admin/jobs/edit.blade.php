@extends('layouts.app', ['hideNavbar' => true])

@section('content')
<div class="container">
    <h1>Edit Lowongan</h1>

    <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Judul -->
        <div class="mb-3">
            <label for="title" class="form-label">Judul Pekerjaan</label>
            <input type="text" name="title" id="title" 
                   class="form-control" 
                   value="{{ old('title', $job->title) }}" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" rows="4" 
                      class="form-control" required>{{ old('description', $job->description) }}</textarea>
        </div>

        <!-- Lokasi -->
        <div class="mb-3">
            <label for="location" class="form-label">Lokasi</label>
            <input type="text" name="location" id="location" 
                   class="form-control" 
                   value="{{ old('location', $job->location) }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipe Pekerjaan</label>
            <select name="type" id="type" class="form-control" required>
                <option value="Full-time" {{ $job->type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                <option value="Part-time" {{ $job->type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                <option value="Internship" {{ $job->type == 'Internship' ? 'selected' : '' }}>Internship</option>
            </select>
        </div>


        <!-- Tombol -->
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
