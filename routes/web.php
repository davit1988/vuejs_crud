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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/persons', [App\Http\Controllers\PersonsController::class, 'index']);
Route::post('/persons', [App\Http\Controllers\PersonsController::class, 'store']);
Route::patch('/persons/{person}', [App\Http\Controllers\PersonsController::class, 'update']);
Route::delete('/persons/{person}', [App\Http\Controllers\PersonsController::class, 'delete']);
