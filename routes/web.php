<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;

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


Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest'); 

Route::get('/register', [UserController::class, 'register'])->middleware('guest');

Route::get('/tes', function () {
    return view('tes');
});

Route::post('/saveregister', [UserController::class, 'saveRegister'])->name('saveregister');

Route::post('/postlogin', [UserController::class, 'postLogin'])->name('postlogin');

Route::get('/logout', [UserController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/',[HomeController::class, 'index']);

    Route::get('/user-data',[UserController::class, 'userData']);

    Route::get('/delete-user/{id}',[UserController::class, 'deleteUser']);

    Route::get('/show-user/{id}',[UserController::class, 'show']);

    Route::get('/profile', [UserController:: class, 'profile'])->name('profile');

    Route::get('/change-user/{id}',[UserController::class, 'changeUser']);

    Route::post('/post-change-user/{id}', [UserController::class, 'postChangeUser']);
    
    Route::get('/modify-profile', [UserController::class, 'modifyProfile']);
    
    Route::post('/post-modify-profile', [UserController::class, 'postModifyProfile']);

    Route::get('/news', [NewsController::class, 'newsList']);

    Route::get('/news/{id}/', [NewsController::class, 'news']);

    Route::get('/create-news', [NewsController::class, 'createNews']);

    Route::post('/store-news', [NewsController::class, 'storeNews']);

    Route::get('/categories', [NewsController::class, 'displayCategories']);

    Route::get('/categories/create', [NewsController::class, 'createCategories']);

    Route::post('/store-categories', [NewsController::class, 'storeCategories']);

    Route::get('/delete-categories/{id}',[NewsController::class, 'deleteCategories']);

});
