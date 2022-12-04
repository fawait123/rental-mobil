<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminCompanyController;

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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route master data
Route::group(['prefix'=>'masterdata','middleware'=>'auth'],function(){
    Route::resource('brand',BrandController::class);
    Route::resource('type',TypeController::class);
    Route::resource('user',UserController::class);
    Route::resource('company',CompanyController::class);
    // company
    Route::group(['prefix'=>'companies'],function(){
        Route::resource('property',PropertyController::class);
    });
    // admin company
    Route::group(['prefix'=>'admin'],function(){
        Route::get('company',[AdminCompanyController::class,'index'])->name('admin.company');
        Route::get('list-car',[AdminCompanyController::class,'listCar'])->name('admin.list-car');
        Route::get('isShow',[AdminCompanyController::class,'isShow'])->name('admin.is-show');
    });
});
