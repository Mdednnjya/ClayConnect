<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('products.wishlist.wishlist', compact('googleMapsApiKey'));
    }
}
