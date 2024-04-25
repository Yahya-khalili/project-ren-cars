<?php

use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeContoller;

use App\Http\Controllers\admin\userController as AdminUserController;
use App\Http\Controllers\admin\CarController as AdminCarController;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\Admin\BookingUser;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\User\BookigUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\registerUserController;
use App\Http\Controllers\UserAuthController;


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

Route::get('/',[homeContoller::class , "index"]);
Route::get('/offers',[homeContoller::class , "indexOffers"])->name("indexOffers")->middleware("isLogedIn");
Route::get('/booking-succes',[homeContoller::class , "book"])->name("bookSucc");





Route::get('/login',[adminController::class , "show"])->name("login.show");
Route::post('/Login',[adminController::class , "login"])->name("login");
Route::get('/logout',[adminController::class , "logout"])->name("logout");

Route::post('generate-pdf/{id}', [BookController::class, 'generateBill'])->name('pdf');

Route::get('/user/register',[registerUserController::class , "index"])->name("register.index");
Route::post('/user/register',[registerUserController::class , "store"])->name("register.store");
Route::get('/user/login',[LoginUserController::class , "index"])->name("login.index");
Route::post('/user/login',[LoginUserController::class , "login"])->name("login.login");
Route::get('/user/logout',[LoginUserController::class , "logout"])->name("logout.logout");


Route::post('/offers',[BookigUserController::class , "store"])->name("bookingUser.store");



Route::middleware(['admin'])->group(function () {
Route::get('/dashboard',[BookigUserController::class , "indexDash"])->name("indexDash");

    // Admin routes that require authentication
    Route::prefix('dashboard')->group(function () {
        Route::get('/userAuth',[registerUserController::class , "create"])->name("register.create");
        Route::delete('/userAuth/{client}',[registerUserController::class , "destroy"])->name("register.destroy");
        Route::delete('/{bookUser}',[BookigUserController::class , "destroy"])->name("bookingUser.destroy");
        Route::put('/approve/{id}',[BookigUserController::class , "approve"])->name("bookings.approve");
        Route::put('/decline/{id}',[BookigUserController::class , "decline"])->name("bookings.decline");


        Route::resource('user', AdminUserController::class);
        Route::resource('cars', AdminCarController::class);
        Route::resource("brand",BrandController::class);
        Route::resource("book",BookController::class);
        
    
        Route::get('searchBrand',[BrandController::class ,"searchBrand"])->name('brand.search');
        Route::get('searchBooking',[BookController::class ,"searchBooking"])->name('book.search');
        Route::get('searchCars',[AdminCarController::class ,"searchCars"])->name('cars.search');
        Route::get('search',[AdminUserController::class , "search"])->name('user.search');

        Route::post('generate-pdf/{id}', [BookController::class, 'generateBill'])->name('pdf');
        Route::get('bookings/pdff', [BookController::class, 'exportPdf'])->name('pdf.book');
        
        Route::get('users/pdf', [AdminUserController::class, 'exportPdf'])->name('pdf.users');
        Route::get('brands/pdf', [BrandController::class, 'exportPdf'])->name('pdf.brand');
        Route::get('pdf', [AdminCarController::class, 'exportPdfcar'])->name('pdf.cars');
    
    });

});


Route::post("/contact-us" ,[contactController::class , "contact"] )->name("contactUs");

