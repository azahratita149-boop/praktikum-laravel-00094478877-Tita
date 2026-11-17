<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function tampil(){
        return view ('login');
    }
    public function daftar(){
        return view ('register');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $ambildata=$request->only('email','password');
        if (Auth::attempt($ambildata)){
            redirect('dashboard')->with('pesan','berhasil masuk');

        }
        else{
            return back()->with('pesan','email atau password salah');
        }
    }
        public function buat(Request $request){
            $request->validate([
                'nama lengkap'=>'required',
                'email'=>'required|uniqued:email|email',
                'no telepon'=>'required|string',
                'passsword'=>'required|min:0',
                'ulangi'=>'required|same:password'
            ]);
            return back()->with('pesan','akun telah dibuat');

        }

}















