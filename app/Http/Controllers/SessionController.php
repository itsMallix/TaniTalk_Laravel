<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate(
            [
            'email'=>'required',
            'password'=>'required',
            ],
            [
                'email.required'=> 'email wajib diisi',
                'password.required'=> 'password wajib diisi',
            ],
        );

        $cekLogin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($cekLogin)){
            if(Auth::user()->role == 'petani'){
                return redirect('home/petani');
            }elseif(Auth::user()->role == 'pengelola'){
                return redirect('home/pengelola');
            }elseif(Auth::user()->role == 'pengguna'){
                return redirect('home/pengguna');
            }
        }else{
            return redirect('')->withErrors('Email atau password salah');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
