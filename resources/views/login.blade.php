@extends('layouts.app')

@section('title', '୨ Login ୧')

@section('content')
<div style="position:relative; z-index:2; background-color:#7dc9ec; width:100%; max-width:360px; border-radius:32px; padding:20px 18px 16px 18px; box-shadow:0 20px 40px rgba(45, 108, 142, 0.3); border:2px solid rgba(255, 255, 255, 0.6);">
  <div style="position:absolute; top:38px; left:20px; background:#ffffff; padding:2px 8px; border-radius:50px; display:flex; align-items:center; font-size:0.82rem; box-shadow:0 4px 8px rgba(0,0,0,0.08); z-index:5;">
    ᜊ( ' ⩊ '𖦹)ᜊ
  </div>

  <div style="display:flex; justify-content:space-between; align-items:center; color:#1e4d67; font-size:1.1rem; font-weight:700; margin-bottom:22px; padding:0 4px;">
    <span>☁️ <i class="bi bi-cloud-line fs-5"></i></span>
    <span>(っ 👋🏻 c)</span>
    <i class="bi bi-gear fs-5"></i>
  </div>

  <div style="background:linear-gradient(180deg, #edf7fc 0%, #d8effa 100%); border-radius:26px; padding:24px 18px 22px 18px; box-shadow:inset 0 2px 4px rgba(255,255,255,0.9);">
    <div style="color:#1a3e54; font-weight:800; font-size:1.55rem; text-align:center; margin-bottom:4px;">Welcome!</div>
    <div style="color:#618296; font-size:0.85rem; text-align:center; font-weight:700; margin-bottom:20px;">Input ur cool email! 😆✨</div>

    <form action="/dashboard" method="GET">
      @csrf
      <div style="background-color:#ffffff; border-radius:50px; padding:4px 16px; display:flex; align-items:center; margin-bottom:14px; border:1px solid #e1eff6;">
        <i class="bi bi-cloud-line" style="color:#a8c3d8;"></i>
        <input type="email" name="email" placeholder="you@sky.com" required style="border:none; outline:none; background:transparent; width:100%; padding:8px; font-size:0.88rem;" />
      </div>

      <div style="background-color:#ffffff; border-radius:50px; padding:4px 16px; display:flex; align-items:center; margin-bottom:14px; border:1px solid #e1eff6;">
        <i class="bi bi-lock" style="color:#a8c3d8;"></i>
        <input type="password" name="password" placeholder="••••••••" required style="border:none; outline:none; background:transparent; width:100%; padding:8px; font-size:0.88rem;" />
      </div>

      <button type="submit" class="btn" style="background-color:#0b556a; color:#ffffff; font-weight:700; border-radius:50px; width:100%; padding:10px; margin-bottom:12px;">Sign In</button>
    </form>
    
    <div style="text-align: center; margin-top: 10px;">
      <a href="/ourteam" style="color: #0b556a; font-size: 0.85rem; text-decoration: none; font-weight: bold;">Lihat Our Team ☁️</a>
    </div>
  </div>
</div>
@endsection