<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)
            ->with('orderItems.product')
            ->orderBy('created_at', 'desc')
            ->paginate(2);

        $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
        return view('account.history', compact('googleMapsApiKey', 'orders'));
    }


}
