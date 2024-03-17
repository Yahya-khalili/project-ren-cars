<?php

use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeContoller;

use App\Http\Controllers\admin\userController as AdminUserController;
use App\Http\Controllers\admin\CarController as AdminCarController;

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
Route::get('/login' , function() {
    return view("dashboard.login");

});
Route::get('/',[homeContoller::class , "index"]);
Route::get('/offers',[homeContoller::class , "indexOffers"])->name("indexOffers");

Route::prefix('dashboard')->group(function () {
    Route::resource('user', AdminUserController::class);
    Route::resource('cars', AdminCarController::class);
    Route::resource("brand",BrandController::class);
    
    Route::get('searchBrand',[BrandController::class ,"searchBrand"])->name('brand.search');
    Route::get('searchCars',[AdminCarController::class ,"searchCars"])->name('cars.search');
    Route::get('search',[AdminUserController::class , "search"])->name('user.search');

});
