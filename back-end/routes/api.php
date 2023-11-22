<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cats', [CatController::class, 'getAll']);
Route::get('/cats/top', [CatController::class, 'getTopTen']);
Route::get('/cats/id/{breed_id}', [CatController::class, 'getCatById']);
Route::get('/cats/search', [CatController::class, 'search']);
Route::post('/cats/rank', [CatController::class, 'increaseRank']);