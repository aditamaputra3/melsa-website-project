<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;
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

Route::get("/MenuCatering", function () {
    return view('view-guest.view-catering');

});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('index'); // Redirect to home page
    } else {
        return view('auth.login');
    }
})->name('login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Route::get('/view-kue', function () { return view('view-kue');});
