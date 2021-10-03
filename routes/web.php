<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressBookController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

    Auth::routes();
    Route::get('/', function () {
        return view('home');
    });

    Route::prefix('address')->group(function () {
        Route::get('', [AddressBookController::class, 'getAll']);
        
        Route::middleware('auth')->group(function () {
            Route::post('edit/{id}', [AddressBookController::class, 'edit']);
            Route::post('create', [AddressBookController::class, 'create']);
            Route::get('edit/{id}', [AddressBookController::class, 'getAddress']);
            Route::post('delete/{id}', [AddressBookController::class, 'delete']);
        });
    });

// Route::get('login',['as' => 'login'], [LoginController::class, 'login']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'get'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
