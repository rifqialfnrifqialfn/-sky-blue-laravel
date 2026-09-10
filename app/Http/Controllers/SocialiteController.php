<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    // Redirect ke Penyedia Layanan (Google / Facebook)
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Callback dari Penyedia Layanan setelah Login Berhasil
    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

            // Cari user berdasarkan email atau buat user baru jika belum ada
            $user = User::updateOrCreate([
                'email' => $socialUser->getEmail(),
            ], [
                'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                'password' => Hash::make(Str::random(16)), // Password acak aman
                'email_verified_at' => now(),
            ]);

            // Login-kan user ke sistem Laravel
            Auth::login($user, true);

            return redirect()->intended('/dashboard'); // Ganti /dashboard sesuai halaman tujuan Anda
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Gagal login menggunakan ' . ucfirst($provider));
        }
    }
}