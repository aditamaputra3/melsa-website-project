<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAdminController;
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
Route::get("/MelsaDashboard", function () {
    return view('view-guest.view-home');
});
Route::get("/MenuCake", function () {
    return view('view-guest.view-menu-cake');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('index'); // Redirect to home page
    } else {
        return view('auth.login');
    }
})->name('login');


//route dibawah harus auth dulu buat masuk ke route tersebut
Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('admin', DataAdminController::class);
});
