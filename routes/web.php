<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\RecomendedController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\FrontEnd\AuthController;
use App\Http\Controllers\FrontEnd\TransactionController;


Route::group(['prefix'=>'/'],function(){
    Route::get('/',[WelcomeController::class,'index'])->name('welcome');
    Route::get('products',[WelcomeController::class, 'product'])->name('product');
    Route::get('contact',[WelcomeController::class, 'contact'])->name('contact');
    Route::get('customer/login',[WelcomeController::class, 'login'])->name('frontend.login');
    Route::get('customer/register',[WelcomeController::class, 'register'])->name('frontend.register');
    // auth
    Route::post('customer/register',[AuthController::class, 'actionRegister'])->name('frontend.register.store');
    Route::post('customer/login',[AuthController::class, 'actionLogin'])->name('frontend.register.action');

    // checkout
    Route::group(['middleware'=>'customerauth'],function(){
        Route::get('checkout',[TransactionController::class,'checkoutView'])->name('frontend.checkout.index');
    });
});

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

// route admin front end
Route::group(['prefix'=>'admin/frontend','middleware'=>'auth'],function(){
    Route::resource('banner',BannerController::class);
    Route::resource('recomended',RecomendedController::class);
    Route::resource('other',OtherController::class);
});
