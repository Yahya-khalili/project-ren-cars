<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeContoller;

use App\Http\Controllers\admin\userController as AdminUserController;

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

    Route::resource('user', AdminUserController::class, [
        'names' => [
            'index' => 'user.index',
            'create' => 'user.create',
            'store' => 'user.store',
            'show' => 'user.show',
            'edit' => 'user.edit',
            'update' => 'user.update',
            'destroy' => 'user.destroy',
            'search' => 'user.search',
        ],

    ]);
    Route::get('search',[AdminUserController::class , "search"])->name('user.search');

});
