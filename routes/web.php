<?php

use App\Http\Controllers\DashbroadController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/account/login', [LoginController::class,'index'])->name('account.login');
Route::get('/account/register', [LoginController::class,'register'])->name('account.register');
Route::post('/account/authenticate', [LoginController::class,'authenticate'])->name('account.authenticate');

Route::get('/account/dashbroad', [DashbroadController::class,'index'])->name('account.dashbroad');
