<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\PetugasController;
use Illuminate\Http\Controller;

use Illuminate\require;
use Illuminate\Support\Facades\Route;

Route::get('/',function ()
 {
    return view('welcome');
});


Route::get('/login',[PasienController::class,'login']);
Route::post('/login',[PasienController::class,'proseslogin']);

route::get('/register',[PasienController::class,'regis']);
route::get('/dashboard',function(){
    return view('dashboard');
});

