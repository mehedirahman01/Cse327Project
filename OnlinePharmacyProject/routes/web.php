<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManufacturerController;
use App\Http\Controllers\Admin\MedicinesController;
use App\Http\Controllers\Front\UsersController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\ProductController;
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




Route::get('/new-forget',function(){
    return view("newForget");
});


Route::namespace('Front')->group(function(){
    Route::get('/',[IndexController::class,'welcome']);
    Route::get('/medicine/{id}',[ProductController::class,'detail']);

});


Route::prefix('admin')->group(function(){
    Route::match(['get','post'],'/login',[AdminController::class,'adminLogin'])
              ->name('admin_login');
    Route::middleware(['admin'])->group(function(){
        Route::get('/admin_dashboard',[AdminController::class,'adminDashboard'])
                ->name('admin_dashboard');
        Route::get('/logout',[AdminController::class,'adminLogout']);


        //Manufacturer
        Route::get('/manufacturers',[ManufacturerController::class,'manufacturers']);

        //Medicines
        Route::get('/medicines',[MedicinesController::class,'medicines']);
        Route::match(['get','post'],'add-edit-medicine/{id?}',[MedicinesController::class,'addEditMedicine']);
        Route::match(['get','post'],'delete-medicine/{id?}',[MedicinesController::class,'deleteMedicine']);

    });
});

Route::get('/login-page',[UsersController::class,'loginPage']);
Route::get('/registration-page',[UsersController::class,'registrationPage']);
Route::post('/clogin',[UsersController::class,'loginUser']);
Route::post('/cregister',[UsersController::class,'registerUser']);
Route::get('/logout',[UsersController::class,'logout']);

//user account
Route::match(['GET', 'POST'],'/account',[UsersController::class,'account']);
