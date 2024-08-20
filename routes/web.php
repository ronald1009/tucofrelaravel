<?php

use App\Http\Controllers\cuentaController;
use App\Http\Controllers\transaccionController;
use App\Models\cuenta;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('/transaccion', transaccionController::class);

Route::resource('/cuenta', cuentaController::class);




