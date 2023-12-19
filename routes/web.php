<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeuController;

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

Route::get('/{filial?}', \App\Livewire\Feedback::class)->where('filial', '\d*')->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');
    Route::get('/qrcode', \App\Livewire\QRCode::class)->name('qrcode');
    Route::get('/logout', function () {
        auth()->logout();
        return redirect()->route('index');
    })->name('logout');
});

Route::middleware('guest')->group(function () {
Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
});

Route::fallback(function () {
    return redirect()->route('index');
});

