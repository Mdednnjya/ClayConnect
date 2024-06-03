<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query();

        if ($request->has('color')) {
            $products->where('color', $request->color);
        }

        if ($request->has('price_min') && $request->has('price_max')) {
            $products->whereBetween('price', [$request->price_min, $request->price_max]);
        }
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        $products = Product::paginate(9);
        return view('products.index', compact('googleMapsApiKey'))->with('products', $products);
    }

    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('products.detail', compact('googleMapsApiKey'))->with('product', $product);
    }
}

