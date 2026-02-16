<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa Mata Kuliah {{ $matakuliah->nama_mk }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Mahasiswa yang mengambil {{ $matakuliah->nama_mk }}</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matakuliah->mahasiswas as $mhs)
                <tr>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
</div>
</body>
</html>