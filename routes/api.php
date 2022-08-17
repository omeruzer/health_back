<?php

use App\Http\Controllers\AdvertController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix'=>'auth'],function(){
    Route::post('register',[UserController::class,'register']);
    Route::post('login',[UserController::class,'login']);
});


    Route::get('/user',[UserController::class,'user']);

Route::group(['prefix'=>'company'],function(){
    Route::get('/',[CompanyController::class,'index']);
    Route::get('/home-items',[CompanyController::class,'homeItems']);
    Route::get('/{id}',[CompanyController::class,'detail']);
    Route::post('/',[CompanyController::class,'add']);
    Route::patch('/{id}',[CompanyController::class,'edit']);
    Route::delete('/{id}',[CompanyController::class,'remove']);
});


Route::group(['prefix'=>'country'],function(){
    Route::get('/',[CountryController::class,'index']);
    Route::get('/{id}',[CountryController::class,'detail']);
    Route::post('/',[CountryController::class,'add']);
    Route::patch('/{id}',[CountryController::class,'edit']);
    Route::delete('/{id}',[CountryController::class,'remove']);
});

Route::group(['prefix'=>'city'],function(){
    Route::get('/',[CityController::class,'index']);
    Route::get('/{id}',[CityController::class,'detail']);
    Route::post('/',[CityController::class,'add']);
    Route::patch('/{id}',[CityController::class,'edit']);
    Route::delete('/{id}',[CityController::class,'remove']);
});

Route::group(['prefix'=>'category'],function(){
    Route::get('/',[CategoryController::class,'index']);
    Route::get('/home-items',[CategoryController::class,'homeItems']);
    Route::get('/{id}',[CategoryController::class,'detail']);
    Route::post('/',[CategoryController::class,'add']);
    Route::patch('/{id}',[CategoryController::class,'edit']);
    Route::delete('/{id}',[CategoryController::class,'remove']);
});

Route::group(['prefix'=>'service'],function(){
    Route::get('/',[ServiceController::class,'index']);
    Route::get('/home-items',[ServiceController::class,'homeItems']);
    Route::get('/{id}',[ServiceController::class,'detail']);
    Route::post('/',[ServiceController::class,'add']);
    Route::patch('/{id}',[ServiceController::class,'edit']);
    Route::delete('/{id}',[ServiceController::class,'remove']);
});
