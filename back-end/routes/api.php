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

//route to get all cat breeds
Route::get('/cats', [CatController::class, 'getAll']);
//route to get top 10 cat breeds
Route::get('/cats/top', [CatController::class, 'getTopTen']);
//route to get the cat by id
Route::get('/cats/id/{breed_id}', [CatController::class, 'getCatById']);
//route to search for a cat breed
Route::get('/cats/search', [CatController::class, 'search']);
//route to increase the rank of a cat breed
Route::post('/cats/rank', [CatController::class, 'increaseRank']);