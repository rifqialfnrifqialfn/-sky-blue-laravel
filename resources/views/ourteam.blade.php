@extends('layouts.app')
@section('title', '୨ Daftar Team ୧')

@section('content')
<div class="card p-4 shadow-lg text-center" style="border-radius: 28px; max-width: 680px; width: 100%; z-index: 2; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(12px);">
  
  <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
    <div class="text-start">
      <h3 class="fw-bold text-dark mb-1"><i class="bi bi-people-fill"></i> Our Team!</h3>
      <p class="text-muted mb-0" style="font-size: 0.85rem;">⋆. 𐙚˚࿔ Kelompok 2 - Pemograman Web Laravel 𝜗𝜚˚⋆</p>
    </div>
    <a href="/dashboard" class="btn btn-sm btn-outline-secondary rounded-pill px-3 fw-bold">← Dashboard</a>
  </div>
  
  
  <div class="d-flex flex-column gap-2.5 mb-4 text-start" style="max-height: 400px; overflow-y: auto; padding-right: 6px;">
    
    
    <div class="d-flex align-items: center bg-white p-3 rounded-4 shadow-sm border border-light gap-3">
      <img src="{{ asset('images/foto_rifqi.jpg') }}" alt="Rifqi Alfian Maulana" class="rounded-circle shadow-sm" style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #0b556a;">
      <div>
        <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">☆. Rifqi Alfian Maulana</h6>
        <small class="text-primary fw-bold" style="font-size: 0.78rem;">⭐ Fullstack Developer</small>
      </div>
    </div>

    
    <div class="d-flex align-items: center bg-white p-3 rounded-4 shadow-sm border border-light gap-3">
      <img src="{{ asset('images/foto_gavy.jpg') }}" alt="Gavrila Putri Polean" class="rounded-circle shadow-sm" style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #0b556a;">
      <div>
        <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">𐙚. Gavrila Putri Polean</h6>
        <small class="text-muted fw-bold" style="font-size: 0.78rem;">☁️ UI/UX Designer</small>
      </div>
    </div>

    
    <div class="d-flex align-items: center bg-white p-3 rounded-4 shadow-sm border border-light gap-3">
      <img src="{{ asset('images/foto_bilek.jpg') }}" alt="Muhammad Dafa Gilang Ramadhan" class="rounded-circle shadow-sm" style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #0b556a;">
      <div>
        <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">☆. Muhammad Dafa Gilang Ramadhan</h6>
        <small class="text-muted fw-bold" style="font-size: 0.78rem;">☁️ Database Admin</small>
      </div>
    </div>

    
    <div class="d-flex align-items: center bg-white p-3 rounded-4 shadow-sm border border-light gap-3">
      <img src="{{ asset('images/foto_aulia.jpg') }}" alt="Siti Nur Aulia" class="rounded-circle shadow-sm" style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #0b556a;">
      <div>
        <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">𐙚. Siti Nur Aulia</h6>
        <small class="text-muted fw-bold" style="font-size: 0.78rem;">☁️ Controller & Routing</small>
      </div>
    </div>

    
    <div class="d-flex align-items: center bg-white p-3 rounded-4 shadow-sm border border-light gap-3">
      <img src="{{ asset('images/foto_dimas.jpg') }}" alt="Dimas Abdul Rohman" class="rounded-circle shadow-sm" style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #0b556a;">
      <div>
        <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">☆. Dimas Abdul Rohman</h6>
        <small class="text-muted fw-bold" style="font-size: 0.78rem;">☁️ QA, Documentation, and Testing</small>
      </div>
    </div>

  </div>

  <a href="/dashboard" class="btn text-white rounded-pill py-2 px-5 shadow-sm" style="background-color: #0b556a; font-weight: 700; font-size: 0.88rem;">← Kembali ke Dashboard</a>
</div>
@endsection