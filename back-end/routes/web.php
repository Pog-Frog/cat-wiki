<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//---------------------------------Admin-----------------------------------//
//--public
Route::get('/', [AdminAuthController::class, 'login'])->name('login');
Route::post('/', [AdminAuthController::class, 'loginPost'])->name('loginPost');

//--private
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
Route::post('/delete', [AdminController::class, 'delete_breeds'])->name('delete_breeds');
Route::get('/add_breed', [AdminController::class, 'add_breed'])->name('add_breed');
Route::post('/add_breed', [AdminController::class, 'add_breed_post'])->name('add_breed_post');
