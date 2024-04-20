<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//products
Route::get('products/product-details/{id}', [App\Http\Controllers\Products\ProductsController::class, 'productDetails'])->name('product.details');
Route::post('products/product-details/{id}', [App\Http\Controllers\Products\ProductsController::class, 'addToCart'])->name('add.cart');
Route::get('products/cart', [App\Http\Controllers\Products\ProductsController::class, 'cart'])->name('cart');
Route::get('products/cart-delete/{id}', [App\Http\Controllers\Products\ProductsController::class, 'deleteProductFromCart'])->name('cart.product.delete');


//checkout
Route::post('products/prepare-checkout', [App\Http\Controllers\Products\ProductsController::class, 'prepareCheckout'])->name('prepare.checkout');
Route::get('products/checkout', [App\Http\Controllers\Products\ProductsController::class, 'checkout'])->name('checkout');
Route::post('products/checkout', [App\Http\Controllers\Products\ProductsController::class, 'storeCheckout'])->name('process.checkout');


//booking
Route::post('/booking', [App\Http\Controllers\Products\ProductsController::class, 'bookTable'])->name('booking.tables');

//menu
Route::get('products/menu', [App\Http\Controllers\Products\ProductsController::class, 'menu'])->name('products.menu');

//user info
Route::get('users/orders', [App\Http\Controllers\Users\UsersController::class, 'displayOrders'])->name('users.orders');
Route::get('users/bookings', [App\Http\Controllers\Users\UsersController::class, 'displayBookings'])->name('users.bookings');
