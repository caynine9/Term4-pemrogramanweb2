<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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


Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'register']);

Route::get('/tes', function () {
    return view('tes');
});

Route::post('/saveregister', [UserController::class, 'saveRegister'])->name('saveregister');

Route::post('/postlogin', [UserController::class, 'postLogin'])->name('postlogin');

Route::get('/logout', [UserController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/',[HomeController::class, 'index']);
    
});
