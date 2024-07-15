<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ServiceController;


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


    //____  Banner  ____//
    Route::resource('banner', BannerController::class)->names('admin.banner');
    Route::get('/get-banner',[BannerController::class,'getData'])->name('admin.get-banner');
    Route::post('/banner/status',[BannerController::class,'adminBannerStatus'])->name('admin.banner.status');


    //____  Review  ____//
    Route::resource('review', ReviewController::class)->names('admin.review');
    Route::get('/get-review',[ReviewController::class,'getData'])->name('admin.get-review');
    Route::post('/review/status',[ReviewController::class,'adminReviewStatus'])->name('admin.review.status');


    //____  Project  ____//
    Route::resource('project', ProjectController::class)->names('admin.project');
    Route::get('/get-project',[ProjectController::class,'getData'])->name('admin.get-project');
    Route::post('/project/status',[ProjectController::class,'adminProjectStatus'])->name('admin.project.status');


    //____  Contact  ____//
    Route::resource('contact', ContactController::class)->names('admin.contact');
    Route::get('/get-contact',[ContactController::class,'getData'])->name('admin.get-contact');
    Route::post('/contact/status',[ContactController::class,'adminContactStatus'])->name('admin.contact.status');


    //____ NOTE About  ____//
    Route::resource('about', AboutController::class)->names('admin.about');
    Route::get('/get-about',[AboutController::class,'getData'])->name('admin.get-about');
    Route::post('/about/status',[AboutController::class,'adminAboutStatus'])->name('admin.about.status');


    //____ Service  ____//
    Route::resource('service', ServiceController::class)->names('admin.service');
    Route::get('/get-service',[ServiceController::class,'getData'])->name('admin.get-service');
    Route::post('/service/status',[ServiceController::class,'adminServiceStatus'])->name('admin.service.status');
});

