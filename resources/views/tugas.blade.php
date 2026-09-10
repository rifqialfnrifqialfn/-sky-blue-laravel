@extends('layouts.app')
@section('title', 'Daftar Tugas 𝜚')

@section('content')
<div class="card p-4 shadow-lg text-start" style="border-radius: 28px; max-width: 680px; width: 100%; z-index: 2; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(12px);">
  
  <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
    <div>
      <h3 class="fw-bold text-dark mb-1"><i class="bi bi-journal-check"></i> Daftar Tugas Proyek</h3>
      <p class="text-muted mb-0" style="font-size: 0.85rem;">Manajemen tugas dan progres pengerjaan kelompok</p>
    </div>
    <a href="/dashboard" class="btn btn-sm btn-outline-secondary rounded-pill px-3 fw-bold">← Dashboard</a>
  </div>

  <!-- Container Tugas Dinamis dari Database -->
  <div class="d-flex flex-column gap-3 mb-4" style="max-height: 400px; overflow-y: auto; padding-right: 6px;">
    
    @foreach($tasks as $task)
    <div class="p-3 bg-white rounded-4 shadow-sm border border-light d-flex justify-content-between align-items-center">
      <div>
        <h6 class="fw-bold text-dark mb-1" style="font-size: 0.92rem;">✨ {{ $task->title }}</h6>
        <p class="text-muted mb-0" style="font-size: 0.82rem;">{{ $task->description }}</p>
      </div>
      <div>
        <span class="badge bg-info text-dark rounded-pill px-3 py-2" style="font-size: 0.75rem;">{{ $task->status }}</span>
      </div>
    </div>
    @endforeach

  </div>

  <div class="text-center">
    <a href="/dashboard" class="btn text-white rounded-pill py-2 px-5 shadow-sm" style="background-color: #0b556a; font-weight: 700; font-size: 0.88rem;">← Kembali ke Dashboard</a>
  </div>

</div>
@endsection