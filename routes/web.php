<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressBookController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/addressbook', [AddressBookController::class, 'get']);
