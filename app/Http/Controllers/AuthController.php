<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan Anda telah mengimpor model User

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('auth.register', compact('googleMapsApiKey'));
    }

    public function showLoginForm()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('auth.login', compact('googleMapsApiKey'));
    }

    public function register(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Otentikasi pengguna baru
        Auth::login($user);

        // Redirect ke halaman account
        return redirect()->route('account.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            return redirect()->route('account.index');
        }

        // Autentikasi gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
