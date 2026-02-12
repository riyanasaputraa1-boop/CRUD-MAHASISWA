<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Data Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}" required>
        </div>
        <div class="mb-3">
            <label>Matakuliah</label>
            <input type="text" name="matakuliah" class="form-control" value="{{ $mahasiswa->matakuliah }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>


