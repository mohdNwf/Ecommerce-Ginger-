<?php

use App\Http\Controllers\bannerController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PastelProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('admin', function () {
    return view('welcome');
});


Route::get('pastel', [ProductController::class,'pastel'])->name('pastel');
Route::get('product', [ProductController::class,'product'])->name('product');
Route::get('create', [ProductController::class,'create'])->name('create');
Route::post('save', [ProductController::class,'save'])->name('save');
Route::get('delete/{id}', [ProductController::class,'delete'])->name('delete');
Route::get('edit/{id}', [ProductController::class,'edit'])->name('edit');
Route::post('update', [ProductController::class,'update'])->name('update');
Route::get('category', [CategoryController::class,'category'])->name('category');
Route::get('addcategory', [CategoryController::class,'addcategory'])->name('addcategory');
Route::post('savecategory', [CategoryController::class,'savecategory'])->name('savecategory');
Route::get('deletecategory/{id}', [CategoryController::class,'deletecategory'])->name('deletecategory');
Route::get('editcategory/{id}', [CategoryController::class,'editcategory'])->name('editcategory');
Route::post('updatecategory', [CategoryController::class,'updatecategory'])->name('updatecategory');
Route::get('banner', [bannerController::class,'banner'])->name('banner');
Route::get('addbanner', [bannerController::class,'addbanner'])->name('addbanner');
Route::post('savebanner', [bannerController::class,'savebanner'])->name('savebanner');
Route::get('editbanner/{id}', [bannerController::class,'editbanner'])->name('editbanner');
Route::post('updatebanner/{id}', [bannerController::class,'updatebanner'])->name('updatebanner');
Route::get('deletebanner/{id}', [bannerController::class,'deletebanner'])->name('deletebanner');
Route::get('carousel', [CarouselController::class,'carousel'])->name('carousel');
Route::get('addcarousel', [CarouselController::class,'addcarousel'])->name('addcarousel');
Route::post('savecarousel', [CarouselController::class,'savecarousel'])->name('savecarousel');
Route::get('editcarousel/{id}', [CarouselController::class,'editcarousel'])->name('editcarousel');
Route::post('updatecarousel/{id}', [CarouselController::class,'updatecarousel'])->name('updatecarousel');
Route::get('deletecarousel/{id}', [CarouselController::class,'deletecarousel'])->name('deletecarousel');
Route::get('carousel1', [ProductController::class, 'showCarousel'])->name('carousel1');
Route::get('all', [ProductController::class,'all'])->name('all');
Route::get('selectcategory/{category_id}', [ProductController::class,'selectcategory'])->name('selectcategory');
Route::get('showBanner', [ProductController::class, 'showBanner'])->name('showBanner');


