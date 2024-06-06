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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
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



Route::get('/notification', function () {
    return view('notification');
})->name('notification');



Route::get('/', [HomeController::class, 'index'])->name('home');

//authentication
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

//profile route
Route::get('/profile', [UserController::class, 'index'])->name('account');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
Route::get('/profile/history', [UserController::class, 'history'])->name('history');
Route::get('/profile/settings', [UserController::class, 'settings'])->name('settings');

// Additional routes for new features

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
//Route::get('/products/payment', [ProductController::class, 'payment'])->name('products.payment');

// Cart Routes
Route::middleware('auth')->group(function() {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

});

//payment route
Route::get('/payment', [CartController::class, 'showPaymentPage'])->name('payment.show');
Route::post('/payment', [OrderController::class, 'placeOrder'])->name('payment.placeOrder');
Route::get('/payment/success', [OrderController::class, 'paymentSuccess'])->name('paymentSuccess');



// Order Routes
Route::middleware('auth')->group(function() {
    Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');
    Route::get('/order/history', [OrderController::class, 'orderHistory'])->name('order.history');
});

Route::get('/profile/history', [HistoryController::class, 'index'])->name('history');
