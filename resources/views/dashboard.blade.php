@extends('layouts.app')
@section('title', '୨ Dashboard ୧')

@section('content')
<div class="card p-4 shadow-lg text-start" style="border-radius: 28px; max-width: 680px; width: 100%; z-index: 2; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(12px);">
  
  <!-- Header Sambutan -->
  <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
    <div>
      <h3 class="fw-bold text-dark mb-1">☁️ ˖ ࣪ Welcome! </h3>
      <p class="text-muted mb-0" style="font-size: 0.88rem;">Selamat datang, di dashboard kelompok 2! (˶ᵔ ᵕ ᵔ˶)</p>
    </div>
    <span class="badge bg-info text-white px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.8rem;">PWB - XII RPL 2</span>
  </div>

  <!-- Menu Navigasi di Atas -->
  <div class="mb-4">
    <label class="form-label fw-bold text-secondary mb-2" style="font-size: 0.85rem;"><i class="bi bi-grid-fill"></i> 🔍. Choose the Menu!</label>
    <div class="row g-2">
      <div class="col-4">
        <a href="/jadwal" class="btn btn-outline-primary w-100 py-2 rounded-4 fw-bold text-dark d-flex flex-column align-items-center gap-1 shadow-sm" style="border-color: #b0e0e6; background: #f0f8ff; font-size: 0.85rem;">
          <i class="bi bi-calendar-week fs-5 text-info"></i> ˑ 𓈒 𐔌 Jadwal ͡꒱ ۫
        </a>
      </div>
      <div class="col-4">
        <a href="/tugas" class="btn btn-outline-primary w-100 py-2 rounded-4 fw-bold text-dark d-flex flex-column align-items-center gap-1 shadow-sm" style="border-color: #b0e0e6; background: #f0f8ff; font-size: 0.85rem;">
          <i class="bi bi-journal-check fs-5 text-primary"></i> ˑ 𓈒 𐔌 Tugas ͡꒱ ۫
        </a>
      </div>
      <div class="col-4">
        <a href="/ourteam" class="btn btn-outline-primary w-100 py-2 rounded-4 fw-bold text-dark d-flex flex-column align-items-center gap-1 shadow-sm" style="border-color: #b0e0e6; background: #f0f8ff; font-size: 0.85rem;">
          <i class="bi bi-people-fill fs-5 text-success"></i>ˑ 𓈒 𐔌 Our Team ͡꒱ ۫
        </a>
      </div>
    </div>
  </div>

  <!-- Informasi Ringkas Proyek -->
  <div class="p-3 mb-4 rounded-4" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); border: 1px solid #90caf9;">
    <h6 class="fw-bold text-dark mb-1"><i class="bi bi-info-circle-fill text-primary"></i> Status Pengerjaan Proyek</h6>
    <p class="text-secondary mb-0" style="font-size: 0.85rem;">
      Sistem Laravel dengan AdminLTE 4 dan database kustom sedang berjalan optimal. Siap dilanjutkan ke tahap Migrations & Seeders berikutnya!
    </p>
  </div>

  <!-- Tombol Keluar / Login Kembali -->
  <div class="text-center">
    <a href="/login" class="btn text-white rounded-pill px-4 py-2 shadow-sm" style="background-color: #0b556a; font-weight: 700; font-size: 0.88rem;">
      <i class="bi bi-box-arrow-right"></i> Keluar (Logout)
    </a>
  </div>

</div>
@endsection