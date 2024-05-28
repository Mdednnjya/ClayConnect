<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcController;

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

Route::get('/register', [ProcController::class, 'regist']);

Route::get('/login', [ProcController::class, 'login'])->name('login');

Route::get('/product', [ProcController::class, 'product'])->name('product');

Route::get('/profil/account', [ProcController::class, 'profil'])->name('account');

Route::get('/profil/history', [ProcController::class, 'history'])->name('history');

Route::get('profil/settings', [ProcController::class, 'settings'])->name('settings');

Route::get('profil/wishlist', [ProcController::class, 'wishlist'])->name('wishlist');
