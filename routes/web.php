<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Auth::routes([
    'verify' => true
]);
Route::post('/login/otp', [LoginController::class, 'verifyOtp'])->name('login.otp');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/generate/{id}', [HomeController::class, 'generate'])->name('generate');
    Route::post('/home/add-keyword', [HomeController::class, 'addKeywords'])->name('addKeyword');
});
