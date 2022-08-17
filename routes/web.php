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

Route::get('if-name-exists', [\App\Http\Controllers\Information\InformationController::class , 'names']);
Route::get('is-last-name', [\App\Http\Controllers\Information\InformationController::class , 'lastName']);
Route::get('is-gender', [\App\Http\Controllers\Information\InformationController::class , 'gender']);
