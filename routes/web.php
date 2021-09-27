<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressBookController;


Route::get('/', function () {
    return view('index');
});

Route::get('/addressbook', [AddressBookController::class, 'get']);

Route::prefix('address')->group(function () {
    Route::post('edit/{id}', [AddressBookController::class, 'edit']);
    Route::post('create', [AddressBookController::class, 'create']);
    Route::get('edit/{id}', [AddressBookController::class, 'get']);
    Route::get('', [AddressBookController::class, 'getAll']);
    Route::post('delete/{id}', [AddressBookController::class, 'delete']);
});