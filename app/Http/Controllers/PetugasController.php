<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function login(){
        return view(/'login');
    }
   
public function proseslogin(request $request){

//validasi
$request->validate{[
    'email'=>'required',
    'katasandi'=>'required',
]};

$ambildata=$request->only('email','katasandi');
if(Auth::attempt($ambildata));
{
    tb_pasien::finds($ambildata)
    redirect()->intended('/dashboard')
};


}

}














