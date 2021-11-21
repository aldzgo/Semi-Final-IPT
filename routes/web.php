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

Route::get('/',[App\Http\Controllers\VenueController::class,'index']);
Route::get('venue-list-show',[App\Http\Controllers\VenueController::class,'show']);
Route::get('create-venue',[App\Http\Controllers\VenueController::class,'create']);
Route::post('store-venue',[App\Http\Controllers\VenueController::class,'store']);

