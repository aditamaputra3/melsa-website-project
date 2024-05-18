<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [LandingPageController::class, 'index'])->name('index');

Route::get('menu', [MenuController::class, 'index'])->name('menu');

Route::get("/detail", function () {
    return view('view-guest.view-menu-detail');
});
Route::get("/about", function () {
    return view('view-guest.view-about');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard'); // Redirect to home page
    } else {
        return view('auth.login');
    }
})->name('login');















//route dibawah harus auth dulu buat masuk ke route tersebut
Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('admin', DataAdminController::class);

    Route::resource('kategori', KategoriController::class);

    Route::resource('produk', ProdukController::class)->except(['show']);
   // routes/web.php
   Route::get('/produk/{jenis_produk?}', [ProdukController::class, 'index'])->name('produk.index');
   Route::post('/produk/{jenis_produk?}', [ProdukController::class, 'store'])->name('produk.store');
});
