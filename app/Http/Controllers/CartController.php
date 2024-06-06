<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
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
        $cart = Cart::with('cartItems.product')->where('user_id', $user->id)->first();

        if (!$cart) {
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->save();
        }

        $cart = Cart::with('cartItems.product')->where('user_id', $user->id)->first();
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('products.cart', compact('cart'), compact('googleMapsApiKey'));
    }

    public function removeFromCart(Request $request, $id)
{
    $user = Auth::user();
    $cartItem = CartItem::where('id', $id)->whereHas('cart', function($query) use ($user) {
        $query->where('user_id', $user->id);
    })->first();

    if (!$cartItem) {
        return redirect()->back()->with('error', 'Cart item not found');
    }

    $request->validate([
        'quantity' => 'required|integer|min:1|max:' . $cartItem->quantity,
    ]);

    if ($cartItem->quantity > $request->quantity) {
        $cartItem->quantity -= $request->quantity;
        $cartItem->save();
    } else {
        $cartItem->delete();
    }

    return redirect()->back()->with('success', 'Product removed from cart');
}

public function showPaymentPage()
{
    $user = Auth::user();
    $cart = Cart::with('cartItems.product')->where('user_id', $user->id)->first();

    if (!$cart || $cart->cartItems->isEmpty()) {
        return redirect()->route('cart.view')->with('error', 'Your cart is empty');
    }
    $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
    return view('products.payment.payment', compact('cart'), compact('googleMapsApiKey'));
}


}
