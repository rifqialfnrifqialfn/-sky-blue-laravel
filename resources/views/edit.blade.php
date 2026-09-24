@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm" style="border-radius: 10px;">
                <div class="card-header bg-dark text-white py-3 px-4">
                    <h5 class="m-0 fw-bold">Edit Tugas</h5>
                </div>
                <div class="card-body p-4">
                    <form action="/tugas/update/{{ $tugas->id_tugas }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Tugas</label>
                            <input type="text" name="title" class="form-control" value="{{ $tugas->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Deskripsi / Pelajaran</label>
                            <input type="text" name="description" class="form-control" value="{{ $tugas->description }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="Belum Selesai" {{ $tugas->status == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>
                                <option value="Selesai" {{ $tugas->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="/tugas" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection