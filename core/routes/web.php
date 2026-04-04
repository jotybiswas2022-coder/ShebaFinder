<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\user\ProfileController;




Route::middleware('auth')->controller(UserController::class)->group(function () {
    Route::post('/contactus', 'contactus')->name('contact.send');

});

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/category/{id}', 'list');
    Route::get('/post/{id}', 'post')->name('post.show');
    Route::get('/contact', 'contact')->name('contact');
});

//Profile
Route::middleware('auth')->prefix('/profile')->controller(ProfileController::class)->group(function () {
    Route::get('/', 'index');               
    Route::get('/edit',  'edit');
    Route::put('/update', 'update');
    Route::post('/update', 'update'); // AJAX method spoofing fallback
});


Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

Auth::routes();

include('admin.php');
