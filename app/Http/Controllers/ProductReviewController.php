<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReview;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);

        $review = ProductReview::create([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return response()->json(['message' => 'Review submitted', 'review' => $review]);
    }

    public function index($productId)
    {
        $reviews = ProductReview::where('product_id', $productId)->get();

        return response()->json($reviews);
    }
}

