<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('home', compact('googleMapsApiKey'));
    }
}
