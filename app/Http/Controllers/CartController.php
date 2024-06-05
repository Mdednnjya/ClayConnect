<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Pastikan pengguna sudah login
        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Validasi permintaan
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Cari atau buat keranjang belanja pengguna
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Tambahkan produk ke dalam keranjang belanja
        $cartItem = CartItem::updateOrCreate(
            ['cart_id' => $cart->id, 'product_id' => $request->product_id],
            ['quantity' => $request->quantity]
        );

        // Kembalikan respons JSON
        return response()->json(['message' => 'Product added to cart', 'cart_item' => $cartItem]);
    }

    public function viewCart()
    {
    $user = Auth::user();
    $cart = $user->carts;

    if (!$cart) {
        // Jika pengguna tidak memiliki keranjang belanja, buat keranjang belanja baru
        $cart = new Cart();
        $cart->user_id = $user->id;
        $cart->save();
    }

    // Ambil ulang keranjang belanja
    $cart = Cart::with('cartItems.product')->where('user_id', $user->id)->first();

    // Render view with data
    $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
    return view('products.cart', compact('googleMapsApiKey', 'cart'));
    }


    public function removeFromCart($id)
    {
        $user = Auth::user();
        $cartItem = CartItem::where('id', $id)->whereHas('cart', function($query) use ($user) {
            $query->where('user_id', $user->id);
        })->first();

        if (!$cartItem) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }

        $cartItem->delete();

        return response()->json(['message' => 'Product removed from cart']);
    }
}
