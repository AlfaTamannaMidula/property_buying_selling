<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\AdminController;

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
//website / frontend routes
Route::get('/website',[HomeController::class,'home'])->name('homepage');





//admin panel routes
Route::group(['prefix'=>'admin'],function (){

//dashboard
Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

//category
Route::get('/category',[CategoryController::class,'viewcategory'])->name('category.view');
Route::post('/category/create',[CategoryController::class,'createcategory'])->name('category.create');
Route::get('/category/delete/{id}',[CategoryController::class,'deletecategory'])->name('category.delete');

//post
Route::get('/post',[PostController::class,'viewpost'])->name('post.view');
Route::get('/post/form',[PostController::class,'postform'])->name('post.form');
Route::post('/post/create',[PostController::class,'addpost'])->name('post.add');
Route::get('/post/delete/{id}',[PostController::class,'deletepost'])->name('post.delete');

//payment
//Route::get('/payment/view',[PaymentController::class,'viewpayment'])->name('payment.view');
//Route::get('/payment/history',[PaymentController::class,'historypayment'])->name('payment.history');

//user
Route::get('/user/view',[UserController::class,'viewuser'])->name('user.view');
Route::get('/user/form',[UserController::class,'addform'])->name('user.form');
Route::post('/user/add',[UserController::class,'adduser'])->name('user.add');
Route::get('/user/delete/{id}',[UserController::class,'deleteuser'])->name('user.delete');

//admin
Route::get('admin/list',[AdminController::class,'adminlist'])->name('admin.list');
Route::get('/admin/form',[AdminController::class,'addadminform'])->name('admin.form');
Route::post('/admin/add',[AdminController::class,'addadmin'])->name('add.admin');


//package
Route::get('/package/view',[PackageController::class,'viewpackage'])->name('package.view');
Route::post('/package/add',[PackageController::class,'packageadd'])->name('package.add');
Route::get('/package/delete/{id}',[PackageController::class,'deletepackage'])->name('package.delete');

//Admin login
Route::get('/adminlogin/form',[AdminController::class,'adminlogin'])->name('adminlogin.view');
Route::post('/admin/login',[AdminController::class,'adminValidation'])->name('admin.login');
Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');

});

