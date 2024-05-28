<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Menampilkan halaman utama account.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('account.account');
    }

    /**
     * Menampilkan subhalaman account.
     *
     * @param  string  $subpage
     * @return \Illuminate\Http\Response
     */
    public function show($subpage)
    {
        switch ($subpage) {
            case 'wishlist':
                $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                return view('account.wishlist', compact('googleMapsApiKey'));
                break;
            case 'history':
                $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                return view('account.history' , compact('googleMapsApiKey'));
                break;
            case 'settings':
                $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                return view('account.settings' , compact('googleMapsApiKey'));
                break;
            default:
                $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
                return view('account.account' , compact('googleMapsApiKey'));
        }
    }
}
