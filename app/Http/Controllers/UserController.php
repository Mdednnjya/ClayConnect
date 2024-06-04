<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Cek apakah pengguna telah masuk
        if (Auth::check()) {
            // Pengguna telah masuk, dapatkan data pengguna
            $user = Auth::user();
            // Ambil data pengguna dari objek user
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone_number,
                'photo' => $user->profile_picture ?? 'default.jpg', // Jika foto profil tidak ada, gunakan default.jpg
            ];

            // Kirim data ke tampilan account.account
            $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
            return view('account.account', compact('googleMapsApiKey'))->with('data', $data);
        } else {
            // Jika pengguna tidak masuk, redirect ke halaman login atau tindakan lainnya
            return redirect()->route('login');
        }
    }

    public function editProfile()
    {
        // Cek apakah pengguna telah masuk
        if (Auth::check()) {
            // Pengguna telah masuk, dapatkan data pengguna
            $user = Auth::user();
            // Ambil data pengguna dari objek user
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone_number,
                'photo' => $user->profile_picture ?? 'default.jpg', // Jika foto profil tidak ada, gunakan default.jpg
            ];

            // Kirim data ke tampilan account.edit
            $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
            return view('account.edit', compact('googleMapsApiKey'))->with('data', $data);
        } else {
            // Jika pengguna tidak masuk, redirect ke halaman login atau tindakan lainnya
            return redirect()->route('login');
        }
    }

    public function updateProfile(Request $request)
    {
        // Cek apakah pengguna telah masuk
        if (Auth::check()) {
            $user = Auth::user();

            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:20',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Ubah data pengguna sesuai input yang divalidasi
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->phone_number = $validatedData['phone'];

            // Jika ada file foto diinput, simpan dan ubah foto profil
            if ($request->hasFile('photo')) {
                $photoName = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('photos'), $photoName);
                $user->profile_picture = 'photos/'.$photoName;
            }

            // Simpan perubahan data pengguna
            $user->save();

            // Redirect kembali ke halaman profil pengguna
            return redirect()->route('account');
        } else {
            // Jika pengguna tidak masuk, redirect ke halaman login atau tindakan lainnya
            return redirect()->route('login');
        }
    }

    public function show($subpage)
    {
        switch ($subpage) {
            case 'wishlist':
            case 'history':
            case 'settings':
                // Cek apakah pengguna telah masuk
                if (Auth::check()) {
                    $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                    return view("account.$subpage", compact('googleMapsApiKey'));
                } else {
                    // Jika pengguna tidak masuk, redirect ke halaman login atau tindakan lainnya
                    return redirect()->route('login');
                }
                break;
            default:
                // Jika subpage tidak ditemukan, kirim data ke tampilan account.account
                return redirect()->route('account');
        }
    }

    public function showLogin()
    {
        // Tampilkan halaman login
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('auth.login', compact('googleMapsApiKey'));
    }

    public function showRegister()
    {
        // Tampilkan halaman register
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('auth.register', compact('googleMapsApiKey'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect()->route('home');
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Buat pengguna baru
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone_number' => $request->phone,
        'password' => Hash::make($request->password),
    ]);

    // Alihkan ke halaman login setelah registrasi berhasil
    return redirect()->route('login')->with('success', 'Registration successful! Please login.');
}

}

