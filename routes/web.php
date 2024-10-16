<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('clients',ClientController::class);
Route::resource('factures',FactureController::class);