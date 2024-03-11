<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeContoller;
use App\Http\Controllers\admin\UserController;

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
Route::get('/dashboard' , function() {
    return view('pages.users.user');

});
Route::get('/',[homeContoller::class , "index"]);
Route::get('/offers',[homeContoller::class , "indexOffers"])->name("indexOffers");

Route::get('/dashboard/user',[userController::class , "index"])->name('user.index');