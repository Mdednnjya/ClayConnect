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

    public function product()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('product_catalog.product', compact('googleMapsApiKey'));
    }

    public function shoppingView()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('product_catalog.shoppingView', compact('googleMapsApiKey'));
    }
    
    public function shoppingCart()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('product_catalog.shoppingCart', compact('googleMapsApiKey'));
    }

    public function payment()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('product_catalog.payment.payment', compact('googleMapsApiKey'));
    }

    public function paymentSuccess()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('product_catalog.payment.paymentSuccess', compact('googleMapsApiKey'));
    }

    public function profil()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('account.account', compact('googleMapsApiKey'));
    }

    public function history()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('account.history', compact('googleMapsApiKey'));
    }

    public function settings()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('account.settings', compact('googleMapsApiKey'));
    }

    public function wishlist()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('account.wishlist', compact('googleMapsApiKey'));
    }
}
