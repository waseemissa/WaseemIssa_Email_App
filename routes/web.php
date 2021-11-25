<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

//Views
Route::get('/', [HomeController::class, 'loginView'])->name('loginView');
Route::get('/register', [HomeController::class, 'registerView'])->name('registerView');
Route::get('/homepage', [HomeController::class, 'homeView'])->name('homeView');



