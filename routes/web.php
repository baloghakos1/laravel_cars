<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\FuelController;

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

Route::resource('makers',MakerController::class);
Route::resource('fuels',FuelController::class);

/*Route::get('/', function () {
    return view('welcome');
});*/
