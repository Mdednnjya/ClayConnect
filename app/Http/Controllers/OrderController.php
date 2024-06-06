<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $user = Auth::user();
        $cart = Cart::with('cartItems.product')->where('user_id', $user->id)->first();

        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty');
        }

        // Periksa stok sebelum membuat pesanan
        foreach ($cart->cartItems as $cartItem) {
            $product = $cartItem->product;
            if ($product->stock < $cartItem->quantity) {
                return redirect()->back()->with('error', "Stock for product {$product->name} is not enough. Available stock is {$product->stock}.");
            }
        }

        // Buat pesanan baru
        $order = Order::create([
            'user_id' => $user->id,
            'total_price' => $cart->cartItems->sum(function ($cartItem) {
                return $cartItem->quantity * $cartItem->product->price;
            }),
            'status' => 'Success',
            'tax' => $cart->cartItems->sum(function ($cartItem) {
                return $cartItem->quantity * $cartItem->product->tax;
            }),
        ]);

        foreach ($cart->cartItems as $cartItem) {
            // Pindahkan item keranjang ke item pesanan
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
            ]);

            // Kurangi stok produk
            $product = Product::find($cartItem->product_id);
            $product->stock -= $cartItem->quantity;
            $product->save();
        }

        // Hapus keranjang setelah pesanan dibuat
        $cart->delete();

        // Redirect ke halaman sukses pembayaran dengan mengirimkan data pesanan
        return redirect()->route('paymentSuccess', ['order' => $order]);
    }

    public function paymentSuccess(Order $order)
    {
        // Ambil data pesanan berdasarkan ID
        $order = Order::latest()->first();
        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('products.payment.paymentSuccess', compact('googleMapsApiKey', 'order'));
    }
}
