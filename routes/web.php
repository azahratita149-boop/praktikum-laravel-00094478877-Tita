<?php

use Illuminate\Http\Controller;

use Illuminate\require;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    return view('login');
});


Route::get('/login',[PetugasController::class,'login']);
Route::post('/login',[PetugasController::class,'proseslogin']);
route::get('/logout',)

route::get('dashboard'
    
}