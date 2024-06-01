<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\WishlistController;

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

Route::get('/register', [ProcController::class, 'regist']);

Route::get('/login', [ProcController::class, 'login'])->name('login');

Route::get('/product', [ProcController::class, 'product'])->name('product');

Route::get('/product/shoppingView', [ProcController::class, 'shoppingView'])->name('shoppingView');

Route::get('/product/shoppingView/shoppingCart', [ProcController::class, 'shoppingCart'])->name('shoppingCart');

Route::get('/product/shoppingView/shoppingCart/payment', [ProcController::class, 'payment'])->name('payment');

Route::get('/product/shoppingView/shoppingCart/payment/paymentSuccess', [ProcController::class, 'paymentSuccess'])->name('paymentSuccess');

Route::get('/profile/account', [AccountController::class, 'profile'])->name('account');

Route::get('/profile/account/edit', [AccountController::class, 'editProfile'])->name('profile.edit');

Route::post('/profile/account/update', [AccountController::class, 'updateProfile'])->name('profile.update');

Route::get('/profile/history', [ProcController::class, 'history'])->name('history');

Route::get('profile/settings', [ProcController::class, 'settings'])->name('settings');

Route::get('product/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
