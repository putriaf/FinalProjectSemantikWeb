<?php

use App\Http\Controllers\SmartphoneController;
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


Route::get('/', [SmartphoneController::class, 'index']);
Route::get('/sort/price', [SmartphoneController::class, 'showAndSortPrice']);
Route::get('/sort/battery', [SmartphoneController::class, 'showAndSortBattery']);
Route::post('/search', [SmartphoneController::class, 'search']);
Route::get('/smartphone/{id}', [SmartphoneController::class, 'getSmartphoneById']);
