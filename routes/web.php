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

Route::view('/', 'welcome');

Route::get('/places',
  [\App\Http\Controllers\PlaceController::class, 'index']);

Route::get('/places/create',
  [\App\Http\Controllers\TypeController::class, 'getTypes']);

Route::post('/places/create',
  [\App\Http\Controllers\PlaceController::class, 'sendForm']);

Route::get('/places/{id}',
  [\App\Http\Controllers\PlaceController::class, 'show']);

Route::get('/select',
  [\App\Http\Controllers\PlaceController::class, 'getPlaces']);

Route::post('/select',
  [\App\Http\Controllers\PlaceController::class, 'sendPlace']);


Route::get('/types',
  [\App\Http\Controllers\TypeController::class, 'index']);

Route::view('/types/create', 'typesCreate');

Route::post('/types/create',
  [\App\Http\Controllers\TypeController::class, 'sendForm']);


Route::get('/places/{id}/photos/add',
  [\App\Http\Controllers\PictureController::class, 'addPicture']);

Route::post('/places/{id}/photos/add',
  [\App\Http\Controllers\PictureController::class, 'sendPicture']);
