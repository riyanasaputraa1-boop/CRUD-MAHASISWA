<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Mata Kuliah</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matakuliah.update', $matakuliah->kode_mk) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama MK</label>
            <input type="text" name="nama_mk" class="form-control" value="{{ $matakuliah->nama_mk }}">
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="{{ $matakuliah->sks }}">
        </div>
        <div class="mb-3">
            <label>Semester</label>
            <input type="number" name="semester" class="form-control" value="{{ $matakuliah->semester }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>