<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Daftar Mata Kuliah</h2>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-success mb-3">Tambah Mata Kuliah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliahs as $mk)
            <tr>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>{{ $mk->semester }}</td>
                <td>
                    {{-- Tombol Edit --}}
                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    {{-- Tombol Hapus --}}
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </button>
                    </form>

                    {{-- Tombol Lihat Mahasiswa --}}
                    <a href="{{ route('matakuliah.mahasiswas', $mk->id) }}" class="btn btn-info btn-sm"> Lihat Mahasiswa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>