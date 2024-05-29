<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AccountController extends Controller
{
    public function index()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('account.account');
    }

    public function profile(Request $request)
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        $data = [
            'name' => $request->cookie('name', 'John Doe'),
            'email' => $request->cookie('email', 'john@example.com'),
            'phone' => $request->cookie('phone', '123-456-7890'),
            'photo' => $request->cookie('photo', 'default.jpg'),
        ];

        return view('account.account', compact('data'), compact('googleMapsApiKey'));
    }

    public function editProfile(Request $request)
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        $data = [
            'name' => $request->cookie('name', 'John Doe'),
            'email' => $request->cookie('email', 'john@example.com'),
            'phone' => $request->cookie('phone', '123-456-7890'),
            'photo' => $request->cookie('photo', 'default.jpg'),
        ];

        return view('account.edit', compact('data'), compact('googleMapsApiKey'));
    }

    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $photoName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photos'), $photoName);
            $validatedData['photo'] = 'photos/'.$photoName;
        } else {
            $validatedData['photo'] = $request->cookie('photo', 'default.jpg');
        }

        $minutes = 60 * 24 * 30;
        return redirect()->route('account')
            ->withCookie(cookie('name', $validatedData['name'], $minutes))
            ->withCookie(cookie('email', $validatedData['email'], $minutes))
            ->withCookie(cookie('phone', $validatedData['phone'], $minutes))
            ->withCookie(cookie('photo', $validatedData['photo'], $minutes));
    }

    public function show($subpage)
    {
        switch ($subpage) {
            case 'wishlist':
                $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                return view('account.wishlist', compact('googleMapsApiKey'));
                break;
            case 'history':
                $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                return view('account.history', compact('googleMapsApiKey'));
                break;
            case 'settings':
                $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                return view('account.settings', compact('googleMapsApiKey'));
                break;
            default:
                $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                return view('account.account', compact('googleMapsApiKey'));
        }
    }
}
