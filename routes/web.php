<?php

use App\Http\Controllers\AssetsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Dashboard
Route::get('/', [AssetsController::class, 'dashboard']);

// All Assets
Route::get('/assets', [AssetsController::class, 'index']);

//Show New Form
Route::get('/assets/create', [AssetsController::class, 'create']);

//Store asset data
Route::post('/assets', [AssetsController::class, 'store']); 

// Single Asset
Route::get('/assets/{assets}', [AssetsController::class, 'show']);
