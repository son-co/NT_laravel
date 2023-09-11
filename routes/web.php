<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\OrdersController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductsController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductsController::class, 'productDetail'])->name('product.show');

Route::middleware('auth')->group(function ()  {
    Route::get('/cart', [CartController::class, 'getCart'])->name('getCart');
    Route::get('/addCart', [CartController::class, 'addCart'])->name('addCart');
    Route::get('/addCartHome/{id}', [CartController::class, 'addCartHome'])->name('addCartHome');
    Route::get('/deleteCart/{id}', [CartController::class, 'deleteCart'])->name('deleteCart');
    Route::post('/addReview', [ProductsController::class, 'addReview'])->name('addReview');
    Route::get('/checkout', [CheckOutController::class, 'getCheckout'])->name('checkout');
    Route::get('/account/{id}', [UserDetailController::class, 'getAccount'])->name('account');
    Route::get('/order', [OrdersController::class, 'saveOrder'])->name('order');
   
});

Route::prefix('log')->name('log.')->group(function(){
    Route::get('logIn', [LogController::class, 'indexLog'])->name('logIn');
    Route::get('register', [LogController::class, 'register'])->name('register');
    Route::post('registerUser', [LogController::class, 'registerUser'])->name('registerUser');
    Route::post('signUser', [LogController::class, 'signUser'])->name('signUser');
    // ----------
    Route::get('/logout', [LogController::class, 'logout'])->name('logout');
});


