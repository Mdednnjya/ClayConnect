<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

//authentication
Route::get('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'login'])->name('login');

//product route

Route::get('/product/shoppingView/shoppingCart/payment/paymentSuccess', [ProcController::class, 'paymentSuccess'])->name('paymentSuccess');

//profile route
Route::get('/profile', [UserController::class, 'index'])->name('account');

Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');

Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

Route::get('/profile/history', [UserController::class, 'history'])->name('history');

Route::get('/profile/settings', [UserController::class, 'settings'])->name('settings');

Route::get('product/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');

// Additional routes for new features

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Cart Routes
//Route::middleware('auth')->group(function() {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
//});

// Order Routes
Route::middleware('auth')->group(function() {
    Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');
    Route::get('/order/history', [OrderController::class, 'orderHistory'])->name('order.history');
});

// Product Review Routes
Route::middleware('auth')->group(function() {
    Route::post('/review', [ProductReviewController::class, 'store'])->name('review.store');
});
Route::get('/reviews/{productId}', [ProductReviewController::class, 'index'])->name('reviews.index');

// Wishlist Routes
Route::middleware('auth')->group(function() {
    Route::post('/wishlist/add', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::get('/wishlist', [WishlistController::class, 'viewWishlist'])->name('wishlist.view');
    Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
});
