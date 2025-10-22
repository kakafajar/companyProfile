<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamar Pekerjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2>Lamar Pekerjaan: {{ $job->title }}</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('applications.store', $job) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Surat Lamaran</label>
                <textarea name="cover_letter" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Upload CV</label>
                <input type="file" class="form-control" name="CV" id="CV" accept=".pdf,.doc,.docx">
                <small class="text-muted">* Upload CV dalam format PDF (max 2MB)</small>
            </div>
            <button type="submit" class="btn btn-success">Kirim Lamaran</button>
        </form>
    </div>
</body>
</html>
