<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\LogoController;


//

Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    //____  Category  ____//
    Route::resource('category', CategoryController::class)->names('admin.category');
    Route::get('/get-category',[CategoryController::class,'getData'])->name('admin.get-category');
    Route::post('/category/status',[CategoryController::class,'adminCategoryStatus'])->name('admin.category.status');


    //____  Logo  ____//
    Route::resource('logo', LogoController::class)->names('admin.logo');
    Route::get('/get-logo',[LogoController::class,'getData'])->name('admin.get-logo');
    Route::post('/logo/status',[LogoController::class,'adminLogoStatus'])->name('admin.logo.status');
});

