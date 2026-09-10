<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Sky Blue App')</title>

    <!-- Google Font & Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/quicksand@5.0.8/index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- AdminLTE / Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/css/adminlte.min.css" />

    <style>
      body.sky-theme {
        font-family: 'Quicksand', sans-serif;
        min-height: 100vh;
        margin: 0;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url('https://images.unsplash.com/photo-1513002749550-c59d786b8e6c?q=80&w=1920&auto=format&fit=crop') no-repeat center center fixed;
        background-size: cover;
        position: relative;
        overflow-x: hidden;
      }
      body.sky-theme::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(186, 230, 253, 0.45);
        backdrop-filter: blur(3px);
        z-index: 1;
      }
      .bg-float-item {
        position: absolute;
        z-index: 1;
        user-select: none;
        pointer-events: none;
        color: rgba(255, 255, 255, 0.95);
        text-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        animation: floatAnim 6s ease-in-out infinite;
      }
      .bg-item-1 { top: 8%; left: 6%; font-size: 2.2rem; animation-duration: 7s; }
      .bg-item-2 { top: 18%; right: 8%; font-size: 1.3rem; font-weight: bold; background: rgba(255,255,255,0.25); padding: 6px 12px; border-radius: 20px; backdrop-filter: blur(4px); animation-duration: 8s; }
      .bg-item-3 { bottom: 12%; left: 8%; font-size: 1.3rem; font-weight: bold; background: rgba(255,255,255,0.25); padding: 6px 12px; border-radius: 20px; backdrop-filter: blur(4px); animation-duration: 9s; animation-delay: 1s; }
      .bg-item-4 { top: 60%; right: 12%; font-size: 3rem; animation-duration: 6.5s; animation-delay: 0.5s; }
      .bg-item-5 { bottom: 20%; right: 6%; font-size: 2.8rem; animation-duration: 7.5s; animation-delay: 1.5s; }
      .bg-item-6 { top: 40%; left: 4%; font-size: 2.5rem; animation-duration: 8.5s; }

      @keyframes floatAnim {
        0% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(2deg); }
        100% { transform: translateY(0px) rotate(0deg); }
      }
    </style>
  </head>
  <body class="sky-theme">

    <!-- Elemen Background Melayang -->
    <div class="bg-float-item bg-item-1">☁️</div>
    <div class="bg-float-item bg-item-2">ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧</div>
    <div class="bg-float-item bg-item-3">ᜊ( ' ⩊ '𖦹)ᜊ</div>
    <div class="bg-float-item bg-item-4">🐱</div>
    <div class="bg-float-item bg-item-5">🐰</div>
    <div class="bg-float-item bg-item-6">☁️</div>

    <!-- Konten Utama Dinamis -->
    @yield('content')

    <!-- AdminLTE / Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js"></script>
  </body>
</html>