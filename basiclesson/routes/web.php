<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\productController;

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

Route::get('/', [pagesController::class, 'home']);
Route::get('/apropos', [pagesController::class, 'apropos']);
Route::get('/services', [pagesController::class, 'services']);
Route::get('/show/{id}', [pagesController::class, 'show']);
Route::get('/create', [productController::class, 'create']);
Route::post('/saveproduct', [productController::class, 'saveproduct']);
Route::get('/deleteproduct/{id}', [productController::class, 'deleteproduct']);
Route::get('/editproduct/{id}', [productController::class, 'editproduct']);
Route::put('/update', [productController::class, 'update']);
