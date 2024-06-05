<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $products = Product::query();
        $query = Product::query();

        // Filter by search keyword
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        // Filter by color
        if ($request->has('color')) {
            $query->where('color', $request->input('color'));
        }

        // Filter by price range
        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }
        $products = $query->paginate(9);
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
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
    public function payment()
    {
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('products.payment.payment', compact('googleMapsApiKey'));
    }
}

