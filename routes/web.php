<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\VoterController;

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
    return view('login');
});

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('login');
// Route::get('login',[VoteController::class,'login']);
// Route::post('loginSave',[VoterController::class,'login'])->name('login#save');

// Route::get('register',[VoteController::class,'register']);
// Route::post('registerSave',[VoterController::class,'register'])->name('register#save');

// Route::get('leaderboard',[VoteController::class,'leaderboard'])->name('success#leaderboard');
// Route::get('kingForm',[VoteController::class,'kingForm']);
// Route::get('queenForm',[VoteController::class,'queenForm']);


