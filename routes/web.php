<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('auth/google', [App\Http\Controllers\Users\GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [App\Http\Controllers\Users\GoogleAuthController::class, 'callbackGoogle']);

Route::group(['prefix'=> 'products'], function () {
    //products
    Route::get('/product-details/{id}', [App\Http\Controllers\Products\ProductsController::class, 'productDetails'])->name('product.details');
    Route::post('/product-details/{id}', [App\Http\Controllers\Products\ProductsController::class, 'addToCart'])->name('add.cart');
    Route::get('/cart', [App\Http\Controllers\Products\ProductsController::class, 'cart'])->name('cart')->middleware('auth:web');
    Route::get('/cart-delete/{id}', [App\Http\Controllers\Products\ProductsController::class, 'deleteProductFromCart'])->name('cart.product.delete');


    //checkout
    Route::post('/prepare-checkout', [App\Http\Controllers\Products\ProductsController::class, 'prepareCheckout'])->name('prepare.checkout');
    Route::get('/checkout', [App\Http\Controllers\Products\ProductsController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [App\Http\Controllers\Products\ProductsController::class, 'storeCheckout'])->name('process.checkout');

    //menu
    Route::get('/menu', [App\Http\Controllers\Products\ProductsController::class, 'menu'])->name('products.menu');


});

//booking
Route::post('/booking', [App\Http\Controllers\Products\ProductsController::class, 'bookTable'])->name('booking.tables');


Route::group(['prefix'=> 'users'], function () {
    //user info
    Route::get('/orders', [App\Http\Controllers\Users\UsersController::class, 'displayOrders'])->name('users.orders')->middleware('auth:web');
    Route::get('/bookings', [App\Http\Controllers\Users\UsersController::class, 'displayBookings'])->name('users.bookings')->middleware('auth:web');

});

