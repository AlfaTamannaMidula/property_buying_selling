<?php

use App\Http\Controllers\Frontend\HomeController ;
use App\Http\Controllers\Frontend\UserController ;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\UserpackageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController as BackendPostController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
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

//user login
Route::get('/login-registration',[UserController::class,'showLoginRegistration'])->name('login.registration.form');
Route::post('/registration',[UserController::class,'registration'])->name('registration');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');



//user form post
Route::get('/user/submit/post',[PostController::class,'userSubmitPostForm'])->name('user.submit.post.form');
//user add post
Route::post('/user/post',[PostController::class,'userPost'])->name('user.post');
//user view post
Route::get('/user/submit/post/view',[PostController::class,'userSubmitPostView'])->name('user.submit.post.view');





//user package view
Route::get('/packages',[UserpackageController::class,'viewPackage'])->name('package');
Route::get('/purchase/package/{id}',[UserpackageController::class,'purchasePackage'])->name('purchase.package');
Route::post('/purchase/package/',[UserpackageController::class,'purchasePackageDone'])->name('purchase.packages.done');



//user profile
Route::get('/user/profile/',[UserController::class,'userprofile'])->name('user.profile');
Route::get('/profile/',[UserController::class,'profile'])->name('profile');


//single post view
Route::get('/show/post/{post_id}',[PostController::class,'showPost'])->name('post.show');
Route::get('/all/post',[PostController::class,'postall'])->name('post.all');
//single post details
Route::get('/details/post/{id}',[PostController::class,'postdetails'])->name('post.details');


//contact
Route::get('/contact',[ContactController::class,'contact'])->name('contact.details');


//Request the posts interested
Route::group(['middleware'=>'interest'],function (){

    Route::get('/post/interested/{id}',[PostController::class,'interested'])->name('post.interest');
});


//user dashboard interested posts
Route::get('/interested/posts',[PostController::class,'interestedPosts'])->name('interested.posts');


//view users interested in my posts
Route::get('/interested/users',[PostController::class,'viewInterestedUsers'])->name('view.interested.users');

//view approved user list
Route::get('view/interested/list',[PostController::class,'viewApprovedUsers'])->name('view.approved.user');

//approve and disapprove the request
Route::get('/approve/request/{id}/{action}',[PostController::class,'approve'])->name('approve.request');
// delete user request
Route::get('/delete/request/{id}',[PostController::class,'deleteRequest'])->name('delete.request');

//delete user post
Route::get('/delete/user/post/{id}',[PostController::class,'deletePost'])->name('front.delete.user.post');

//cacel interest in a post
Route::get('/cancel/interest/{id}',[PostController::class,'cancelInterest'])->name('cancel.post.interest');




//admin panel routes
Route::group(['prefix'=>'admin'],function (){


    Route::get('/adminlogin/form',[AdminController::class,'adminlogin'])->name('adminlogin.view');
    Route::post('/admin/login',[AdminController::class,'adminValidation'])->name('admin.login');


   Route::group(['middleware'=>'auth'],function (){

//dashboard
Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

//admin
        Route::get('admin/list',[AdminController::class,'adminlist'])->name('admin.list');
        Route::get('/admin/form',[AdminController::class,'addadminform'])->name('admin.form');
        Route::post('/admin/add',[AdminController::class,'addadmin'])->name('add.admin');

    //Admin login

    Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');

//category
Route::get('/category',[CategoryController::class,'viewcategory'])->name('category.view');
Route::post('/category/create',[CategoryController::class,'createcategory'])->name('category.create');
Route::get('/category/delete/{id}',[CategoryController::class,'deletecategory'])->name('category.delete');

//post
Route::get('/post',[ BackendPostController::class,'viewpost'])->name('post.view');
Route::get('/post/form',[ BackendPostController::class,'postform'])->name('post.form');
Route::post('/post/create',[ BackendPostController::class,'addpost'])->name('post.add');
Route::get('/post/delete/{id}',[ BackendPostController::class,'deletepost'])->name('post.delete');
Route::get('/post/edit/{id}',[ BackendPostController::class,'editpost'])->name('post.edit');
Route::put('/post/update/{id}',[ BackendPostController::class,'updatepost'])->name('post.update');


//user
Route::get('/user/view',[BackendUserController::class,'viewuser'])->name('user.view');
Route::get('/user/form',[BackendUserController::class,'addform'])->name('user.form');
Route::post('/user/add',[BackendUserController::class,'adduser'])->name('user.add');
Route::get('/user/delete/{id}',[BackendUserController::class,'deleteuser'])->name('user.delete');




//package
Route::get('/package/view',[PackageController::class,'viewpackage'])->name('package.view');
Route::post('/package/add',[PackageController::class,'packageadd'])->name('package.add');
Route::get('/package/delete/{id}',[PackageController::class,'deletepackage'])->name('package.delete');

// purchase request
       Route::get('/view/purchase/requests',[PackageController::class,'purchaseRequest'])->name('purchase.request.list');
       Route::get('/approve/request/{request_id}{name}',[PackageController::class,'approveRequest'])->name('approve.purchase.request');
       Route::get('/disapprove',[PackageController::class,'disapprove'])->name('disapprove.purchase');
       Route::get('/purchase/history',[PackageController::class,'purchaseHistory'])->name('purchase.history');

//      purchase request action

       Route::get('/approve/request/{request_id}{name}',[PackageController::class,'approveRequest'])->name('approve.purchase.request');
       Route::get('/disapprove/request/{id}',[PackageController::class,'disapproveRequest'])->name('disapprove.purchase.request');
       Route::get('/disapprove/after/approve/{id}',[PackageController::class,'disapproveAfterApprove'])->name('disapprove.after.approve');



   });
});
