<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManufacturerController;
use App\Http\Controllers\Admin\MedicinesController;
use App\Http\Controllers\Front\UsersController;
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

/*
Route::get('/new-login',[AuthController::class, 'login']){
            ->name('new-login');

Route::get('/new-register',[AuthController::class, 'register']){
            ->name('new-register');
*/

Route::post('/new-login',function(){
    return view("auth.newLogin");
})->name('new-login');

Route::post('/new-register',function(){
    return view("auth.newRegister");
})->name("new-register");


Route::get('/new-forget',function(){
    return view("newForget");
});

Route::get('/', function () {
    return view('welcome');
})->name('homepage');




Route::prefix('admin')->group(function(){
    Route::match(['get','post'],'/',[AdminController::class,'admin_login'])
              ->name('admin_login');
    Route::middleware(['admin'])->group(function(){
        Route::get('/admin_dashboard',[AdminController::class,'admin_dashboard'])
                ->name('admin_dashboard');
        Route::get('/logout',[AdminController::class,'admin_logout']);


        //Manufacturer
        Route::get('/manufacturers',[ManufacturerController::class,'manufacturers']);

        //Medicines
        Route::get('/medicines',[MedicinesController::class,'medicines']);
        Route::match(['get','post'],'add-edit-medicine/{id?}',[MedicinesController::class,'addEditMedicine']);
    
    });
      
    });

Route::get('/login-page',[UsersController::class,'loginPage']);
Route::get('/registration-page',[UsersController::class,'registrationPage']);
Route::post('/clogin',[UsersController::class,'loginUser']);
Route::post('/cregister',[UsersController::class,'registerUser']);
Route::get('/logout',[UsersController::class,'logout']);

//user account
Route::match(['GET', 'POST'],'/account',[UsersController::class,'account']);   


