<?php

// Dashboard Route

Route::controller('App\Http\Controllers\DashboardController')->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::get('/', 'index')->name('index');
});
