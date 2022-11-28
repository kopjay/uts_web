<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class , 'index']);
Route::get('/publisher', [HomeController::class , 'publisher']);
Route::get('/contact', [HomeController::class , 'contact']);
Route::get('/{id}', [HomeController::class , 'detail']);
Route::get('/category/{id}', [HomeController::class , 'category']);


