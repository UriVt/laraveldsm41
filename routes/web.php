<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ExampleController;

Route::post('/guardar', [ExampleController::class, 'store']);