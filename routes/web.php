<?php

use App\Http\Controllers\PenposController;
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

Route::get('/HomePenpos', [PenposController::class, 'index'])->name("HomePenpos");
Route::post('/insertHasilGame', [PenposController::class, 'insertHasilGame']);
