<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/new-login',function(){
    return view("auth.newLogin");
})->name('new-login');

Route::get('/new-register',function(){
    return view("auth.newRegister");
})->name("new-register");


Route::get('/new-forget',function(){
    return view("newForget");
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
