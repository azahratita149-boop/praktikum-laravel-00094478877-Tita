<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PetugasController extends Controller
{
    public function login(){
        return view('/login');
}
   
public function proseslogin(request $request){
//
$request->validate{[
    'email'=>'required',
    'katasandi'=>'required'
]};

$ambildata=$request->only('email','katasandi');

if(Auth::attempt($ambildata)){
    $request = Redirect()-interted('/dashboard');
}
else
    {
        return back()->with('pesan','email atau password salah');
    }

}

}














