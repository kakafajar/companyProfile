@extends('layouts.app', ['hideNavbar' => true])

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Add Job</h2>

    <form action="{{ route('admin.jobs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label>Location</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control">
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
                <option value="Internship">Internship</option>
            </select>
        </div>

        <button type="button" class="btn btn-dark btn-save">Save</button>
    </form>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const saveButton = document.querySelector('.btn-save');
    const form = document.querySelector('form');

    saveButton.addEventListener('click', function() {
        Swal.fire({
            title: 'Yakin ingin menyimpan?',
            text: "Pastikan data sudah benar!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#212529',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, simpan!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
</script>
@endsection

