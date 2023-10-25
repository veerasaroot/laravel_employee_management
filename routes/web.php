<?php

use Illuminate\Support\Facades\Route;

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

Route::controller('App\Http\Controllers\SiteController')->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller('App\Http\Controllers\AuthController')->name('auth.')->prefix('/auth')->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});

require __DIR__ . DIRECTORY_SEPARATOR . 'dashboard.php';
