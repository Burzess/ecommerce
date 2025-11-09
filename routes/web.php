<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::view('/welcome', 'welcome');

// Public product routes
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Redirect logic setelah login
Route::get('/dashboard', function () {
    // Admin tidak boleh akses dashboard biasa, langsung redirect ke admin
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    // Untuk buyer, tampilkan dashboard mereka
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Buyer profile (khusus buyer)
Route::view('profile', 'profile')
    ->middleware(['auth', 'buyer'])
    ->name('profile');

// Cart routes (khusus buyer)
Route::middleware(['auth', 'verified', 'buyer'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::put('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('products', AdminProductController::class);
});

require __DIR__.'/auth.php';
