<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

//return the index of the magazijn
Route::get('/magazijn', [App\Http\Controllers\MagazijnController::class, 'index'])->name('magazijn.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//return the index of the leverancier
Route::get('/leverancier/{id}', [App\Http\Controllers\LeverancierController::class, 'index'])->name('leverancier.index');

//return the index of the allergeen
Route::get('/allergeen/{id}', [App\Http\Controllers\AllergeenController::class, 'index'])->name('allergeen.index');
