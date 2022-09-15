<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
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
Route::get('list-products',[HomeController::class,'listProduct'])->name('list-products');

Route::get('register', [AuthController::class,'showFormRegister'])->name('show-form-register');
Route::post('register', [AuthController::class,'register'])->name('register');

Route::get('login', [AuthController::class,'showFormLogin'])->name('show-form-login');
Route::post('login', [AuthController::class,'login'])->name('login');

Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::middleware('checklogin')->group(function(){
    Route::get('accounts',[AuthController::class,'showListAccounts'])->name('show-list-accounts');
    Route::get('profile',[AuthController::class, 'profile'])->name('profile');
    Route::post('edit-profile',[AuthController::class, 'editProfile'])->name('edit-profile');
    // Route::get('accounts',[AuthController::class,'addNewAccount'])->name('accounts.add');
    // Route::get('accounts',[AuthController::class,'editAccount'])->name('accounts.edit');
    // Route::get('accounts',[AuthController::class,'deleteAccount'])->name('accounts.delete');
    Route::get('list-products',[CategoriesController::class,'listProduct'])->name('list-products');

    Route::get('add-category',[CategoriesController::class, 'formAddCategory'])->name('form-add-category');
    Route::post('add-category',[CategoriesController::class, 'addCategory'])->name('add-category');
    Route::get('edit-category',[CategoriesController::class, 'formEditCategory'])->name('form-edit-category');
    Route::post('edit-category/{id}',[CategoriesController::class, 'editCategory'])->name('edit-category');
    Route::get('delete-category/{id}',[CategoriesController::class, 'deleteCategory'])->name('delete-category');

    Route::get('add-product',[ProductController::class,'create'])->name('create-product');
    Route::post('add-product',[ProductController::class,'store'])->name('store-product');
    
    
});




