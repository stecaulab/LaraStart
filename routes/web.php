<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    return redirect()->action([PageController::class, 'index']);
});
//Route::get('/', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'index']);
Route::get('/contatti', [PageController::class, 'contacts']);
Route::get('/prodotti', [PageController::class, 'single']);
Route::get('/collaborazioni', [PageController::class, 'collaborazioni']);
