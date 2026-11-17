<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
   
public function proseslogin(request $request){

//validasi
$request->validate{[
    'email'->'required',
    'password'->'required',
]};

}
$ambildata=$request->only('email','katasandi');
if(Auth::attempt($ambildata));
{
    $request=redirect()->interded('/dashboard');
}
else{
    return back 
}

















