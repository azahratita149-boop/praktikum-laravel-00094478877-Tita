<?php

use Illuminate\Http\Controller;

use Illuminate\require;
use Symfony\Component\Routing\Annotation\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[PetugasController::class,'login']);
Route::get('users/{id}', function ($id) {
    
});