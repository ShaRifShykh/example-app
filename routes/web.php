<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["middleware" => "auth:web"], function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, "index"]);
    Route::post('/add', [\App\Http\Controllers\HomeController::class, "add"]);

    Route::get('/update/{id}', [\App\Http\Controllers\HomeController::class, "update"]);
    Route::post('/edit', [\App\Http\Controllers\HomeController::class, "edit"]);
    Route::get('/delete/{id}', [\App\Http\Controllers\HomeController::class, "delete"]);

    Route::get('/logout', [\App\Http\Controllers\AuthController::class, "logout"]);
});


Route::get('/login', [\App\Http\Controllers\AuthController::class, "login"])->name("signIn");
Route::post('/login', [\App\Http\Controllers\AuthController::class, "signIn"]);
Route::get('/register', [\App\Http\Controllers\AuthController::class, "register"]);
Route::post('/register', [\App\Http\Controllers\AuthController::class, "signUp"]);
