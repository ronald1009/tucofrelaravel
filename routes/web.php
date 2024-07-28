<?php

use App\Http\Controllers\cuentaController;
use App\Http\Controllers\transaccionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nombre', [cuentaController::class, 'mensaje']);

Route::resource('/transaccion', transaccionController::class);




