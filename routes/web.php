<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\request_controller;
use App\Http\Controllers\UsersTableController;
use  App\Http\Controllers\ProductsTableController;
use App\Http\Controllers\CartTableController;
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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('home',[request_controller::class,'home']);
Route::get('sign_order',[request_controller::class,'signin']);
Route::get('login',[request_controller::class,'login']);
Route::get('logout',[CartTableController::class,'logout']);
Route::get('signup',[request_controller::class,'signup']);
Route::get('menu',[ProductsTableController::class,'show']);
Route::get('profile',[UsersTableController::class,'show']);
Route::post('post_signup',[UsersTableController::class,'store']);
Route::post('post_login',[UsersTableController::class,'post_login']);
Route::post('addtocart',[CartTableController::class,'store']);
Route::get('cart',[CartTableController::class,'show']);
Route::get('checkout',[CartTableController::class,'thanx']);
Route::get('thanksfororder',[CartTableController::class,'thanxlast']);
Route::get('delete/{id}',[CartTableController::class,'destroy']);
Route::get('profile/{id}',[UsersTableController::class,'show']);


