@extends('layouts.app')
@section('title', '୨ Daftar Jadwal ୧')

@section('content')
<div class="card p-4 shadow-lg text-start" style="border-radius: 28px; max-width: 680px; width: 100%; z-index: 2; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(12px);">
  
  <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
    <div>
      <h3 class="fw-bold text-dark mb-1"><i class="bi bi-calendar-week"></i> 𝜗 Jadwal Pelajaran 𝜚</h3>
      <p class="text-muted mb-0" style="font-size: 0.85rem;">Jadwal kegiatan belajar - XII RPL 2</p>
    </div>
    <a href="/dashboard" class="btn btn-sm btn-outline-secondary rounded-pill px-3 fw-bold">← Dashboard</a>
  </div>

  <!-- Container Jadwal Dinamis -->
  <div class="d-flex flex-column gap-3 mb-4" style="max-height: 400px; overflow-y: auto; padding-right: 6px;">
    
    @foreach($jadwals as $day => $items)
    <div class="p-3 bg-light rounded-4 border">
      <!-- Menampilkan Nama Hari (Contoh: Senin, Selasa, dll) -->
      <h6 class="fw-bold text-primary mb-2 border-bottom pb-1">📅 {{ $day }}</h6>
      
      <div class="d-flex flex-column gap-2">
        @foreach($items as $schedule)
        <div class="p-2 bg-white rounded-3 shadow-sm border-start border-4 border-info d-flex justify-content-between align-items-center">
          <div>
            <span class="badge bg-secondary mb-1" style="font-size: 0.7rem;">{{ $schedule->jp ?? '✦ Jam Pelajaran' }}</span>
            <h6 class="fw-bold text-dark mb-0" style="font-size: 0.88rem;">{{ $schedule->subject }}</h6>
            <small class="text-muted" style="font-size: 0.75rem;">Guru: {{ $schedule->teacher ?? '-' }}</small>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endforeach

  </div>

  <div class="text-center">
    <a href="/dashboard" class="btn text-white rounded-pill py-2 px-5 shadow-sm" style="background-color: #0b556a; font-weight: 700; font-size: 0.88rem;">← Kembali ke Dashboard</a>
  </div>

</div>
@endsection