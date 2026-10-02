<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Cast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Daftar Cast / Pemeran</h2>
        <hr>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('cast.create') }}" class="btn btn-primary mb-3">+ Tambah Cast Baru</a>
        
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Bio</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($casts as $key => $cast)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $cast->nama }}</td>
                                <td>{{ $cast->umur }}</td>
                                <td>{{ $cast->bio }}</td>
                                <td>
                                    <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data cast.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>