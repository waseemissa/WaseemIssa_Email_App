<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::any('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send-email');
Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
Route::get('/user-profile', [AuthController::class, 'userProfile'])->name('userProfile');     
});