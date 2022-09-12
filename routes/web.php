<?php

use App\Http\Controllers\AuthController;
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
Route::get('/',function(){
    return view('welcome');
});

Route::get('home',[HomeController::class,'home'])->name('home');
Route::get('product',[HomeController::class,'listProduct'])->name('list-product');

Route::get('register', [AuthController::class,'showFormRegister'])->name('show-form-register');
Route::post('register', [AuthController::class,'register'])->name('register');

Route::get('login', [AuthController::class,'showFormLogin'])->name('show-form-login');
Route::post('login', [AuthController::class,'login'])->name('login');

Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::middleware('checklogin')->group(function(){
    Route::get('accounts',[AuthController::class,'showListAccounts'])->name('show-list-accounts');

    // Route::get('accounts',[AuthController::class,'addNewAccount'])->name('accounts.add');
    // Route::get('accounts',[AuthController::class,'editAccount'])->name('accounts.edit');
    // Route::get('accounts',[AuthController::class,'deleteAccount'])->name('accounts.delete');
    
    Route::get('profile',[AuthController::class, 'profile'])->name('profile');
    Route::post('edit-profile',[AuthController::class, 'editProfile'])->name('edit-profile');
});




