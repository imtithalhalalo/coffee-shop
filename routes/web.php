<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\GoogleAuthController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Users\UsersController;

// Routes accessible without authentication
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('products/menu', [ProductsController::class, 'menu'])->name('products.menu');

// Authentication routes
Auth::routes();

// Google authentication routes
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

// Protected routes requiring authentication
Route::group(['middleware' => ['auth:web']], function () {

    // Products routes
    Route::group(['prefix'=> 'products'], function () {
        Route::get('/product-details/{id}', [ProductsController::class, 'productDetails'])->name('product.details');
        Route::post('/product-details/{id}', [ProductsController::class, 'addToCart'])->name('add.cart');
        Route::get('/cart', [ProductsController::class, 'cart'])->name('cart');
        Route::get('/cart-delete/{id}', [ProductsController::class, 'deleteProductFromCart'])->name('cart.product.delete');
    
        Route::post('/prepare-checkout', [ProductsController::class, 'prepareCheckout'])->name('prepare.checkout');
        Route::get('/checkout', [ProductsController::class, 'checkout'])->name('checkout');
        Route::post('/checkout', [ProductsController::class, 'storeCheckout'])->name('process.checkout');
    });

    // Book table route
    Route::post('/booking', [ProductsController::class, 'bookTable'])->name('booking.tables');

    // User routes
    Route::group(['prefix'=> 'users'], function () {
        Route::get('/orders', [UsersController::class, 'displayOrders'])->name('users.orders');
        Route::get('/bookings', [UsersController::class, 'displayBookings'])->name('users.bookings');
    });
});