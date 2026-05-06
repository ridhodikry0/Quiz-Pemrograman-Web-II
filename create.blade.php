<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Tambah Data Tugas</h2>

    <form action="{{ route('Tugas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Tugas</label>
            <input type="text" name="nama_tugas" class="form-control">
        </div>

        <div class="mb-3">
            <label>Deadline</label>
            <input type="text" name="due_date" class="form-control">
        </div>

        <div class="mb-3">
            <label>Referensi</label>
            <input type="text" name="reference" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <input type="boolean" name="status" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control">
        </div>

        <div class="mb-3">
            <label>Notes</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('Tugas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>