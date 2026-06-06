<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\ProductController;

// PUBLIC (pengunjung)
Route::get('/produk', [ProductController::class, 'index']);

// ADMIN ONLY
Route::middleware('auth')->group(function () {
    Route::post('/tambah-produk', [ProductController::class, 'store']);
    Route::delete('/produk/{id}', [ProductController::class, 'destroy']);
});

use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect('/produk');
    }
    return back()->with('error', 'Login gagal');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
Route::get('/kontak', function () {
    return view('kontak');
});

use App\Http\Controllers\CartController;

Route::post('/cart/add', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/remove/{id}', [CartController::class, 'remove']);
Route::post('/checkout', [CartController::class, 'checkout']);

use App\Http\Controllers\AdminController;

Route::get('/admin/orders', [AdminController::class, 'orders'])
    ->middleware('admin');
Route::get('/admin/orders/{id}', [AdminController::class, 'show'])
    ->middleware('admin');