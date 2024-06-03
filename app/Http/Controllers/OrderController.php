<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $user = Auth::user();
        $cart = Cart::with('cartItems.product')->where('user_id', $user->id)->first();

        if (!$cart || $cart->cartItems->isEmpty()) {
            return response()->json(['message' => 'Your cart is empty'], 400);
        }

        $order = Order::create([
            'user_id' => $user->id,
            'total_price' => $cart->cartItems->sum(function ($cartItem) {
                return $cartItem->quantity * $cartItem->product->price;
            }),
            'status' => 'Pending',
        ]);

        foreach ($cart->cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
            ]);
        }

        $cart->delete();

        return response()->json(['message' => 'Order placed successfully', 'order' => $order]);
    }

    public function orderHistory()
    {
        $user = Auth::user();
        $orders = Order::with('orderItems.product')->where('user_id', $user->id)->get();

        return response()->json($orders);
    }
}

