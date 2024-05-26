<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcController extends Controller
{
    public function regist()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('auth.register', compact('googleMapsApiKey'));
    }

    public function login()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('auth.login', compact('googleMapsApiKey'));
    }
}
