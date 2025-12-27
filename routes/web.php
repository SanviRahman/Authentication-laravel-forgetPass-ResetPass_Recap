<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Front\FrontController;


Route::get('/',[FrontController::class,'home'])->name('home');
Route::get('/about',[FrontController::class,'about'])->name('about');

//User
Route::middleware('user')->group(function(){
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
    Route::get('/profile',[UserController::class,'profile'])->name('profile');
    Route::post('/profile',[UserController::class,'profile_submit'])->name('profile_submit');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
});

Route::get('/registration',[UserController::class,'registration'])->name('registration');
Route::post('/registration',[UserController::class,'registration_submit'])->name('registration_submit');
Route::get('registration_verify/{token}/{email}',[UserController::class,'registration_verify'])->name('registration_verify');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'login_submit'])->name('login_submit');
Route::get('/forget_password',[UserController::class,'forget_password'])->name('forget_password');
Route::post('forget_password',[UserController::class,'forget_password_submit'])->name('forget_password_submit');
Route::get('/reset_password/{token}/{email}',[UserController::class,'reset_password'])->name('reset_password');
Route::post('reset_password/{token}/{email}',[UserController::class,'reset_password_submit'])->name('reset_password_submit');