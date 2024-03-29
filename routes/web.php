<?php

use App\Http\Controllers\AssetsController;
use App\Http\Controllers\ScheduleController;
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

//Update Asset
Route::put('/assets/{asset}', [AssetsController::class, 'update']);

//Store asset data
Route::post('/assets', [AssetsController::class, 'store']); 

//Show Edit Form
Route::get('/assets/{assets}/edit', [AssetsController::class, 'edit']);

//Show Schedule Asset Form
Route::get('/assets/{assets}/schedule', [AssetsController::class, 'schedule']);

//Update Asset
Route::put('/assets/{assets}', [AssetsController::class, 'update']);

// Single Asset
Route::get('/assets/{assets}', [AssetsController::class, 'show']);




//Schedule
Route::get('/schedule',[ScheduleController::class, 'index']);
