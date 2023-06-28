<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerAuth;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerImage;
use App\Http\Controllers\ControllerSlide;
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
});

// Route::get('/layout', function() {
//     return view('user.layout');
// });
// Route::get('/home', function() {
//     return view('user.admin.home');
// })->name('home');
// Route::get('/management-user', function() {
//     return view('user.admin.management_user');
// });
// Route::get('/management-category', function() {
//     return view('user.admin.management_category');
// });
// Route::get('/management-product', function() {
//     return view('user.admin.management_product');
// });
// Route::get('/create-product', function() {
//     return view('product.create');
// });
Route::post('/update_image/{id}', [ControllerImage::class, 'update'])->name('update.image');


Route::get('/Register', [ControllerUser::class, 'create'])->name('create.register');
Route::post('/Register', [ControllerUser::class, 'store'])->name('register.store');
Route::get('profile', [ControllerUser::class, 'profile'])->name('profile');
Route::get('edit_profile/{id}', [ControllerUser::class, 'editprofile'])->name('edit.profile');
Route::post('update/{id}', [ControllerUser::class, 'update'])->name('update.profile');
Route::get('create_user', [ControllerUser::class, 'create_user'])->name('create_user');



Route::get('Login', [ControllerAuth::class, 'showLogin'])->name('showLogin');
Route::post('Login', [ControllerAuth::class, 'login'])->name('auth.login');
Route::get('/auth/google', [ControllerAuth::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [ControllerAuth::class, 'handleGoogleCallback']);

Route::group(['prefix'=>'Admin'], function() {
    Route::get('management_user', [ControllerAdmin::class, 'management_user'])->name('management_user');
    Route::get('management_category', [ControllerAdmin::class, 'management_category'])->name('management_category');
    Route::get('management_product', [ControllerAdmin::class, 'management_product'])->name('management_product');

});




Route::group(['prefix'=>'Category'], function() {
    Route::get('/create', [ControllerCategory::class, 'create'])->name('create.category');
    Route::post('/store', [ControllerCategory::class, 'store'])->name('store.category');
    Route::get('/{id}', [ControllerCategory::class, 'edit'])->name('edit.category');
    Route::post('/update/{id}', [ControllerCategory::class, 'update'])->name('update.category');
});
    

Route::group(['prefix' =>'Product'], function() {
    Route::get('create', [ControllerProduct::class, 'create'])->name('create.product');
    Route::post('store', [ControllerProduct::class, 'store'])->name('store.product');
    Route::get('edit/{id}', [ControllerProduct::class, 'edit'])->name('edit.product');
    ROute::post('update/{id}', [ControllerProduct::class, 'update'])->name('update.product');
});


Route::get('nam', [ControllerHome::class, 'index'])->name('index.nam');
// Route::get('Slide', [ControllerHome::class, 'slide'])->name('slide.home');
Route::get('detail', [ControllerHome::class, 'detail'])->name('detail.home');


Route::get('slide_create', [ControllerSlide::class, 'create'])->name('slide.create');
Route::post('slide_create', [ControllerSlide::class, 'store'])->name('store.slide');
Route::get('lide', [ControllerSlide::class, 'index'])->name('slide.index');



Route::get('account', function() {
    return view('user.buyer.account');
});


