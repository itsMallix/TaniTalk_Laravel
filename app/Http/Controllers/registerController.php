<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|max:100',
            'email'=>'required|unique:users',
            'password'=>'required',
            'role'=>'required',
        ]);

        $validate['password']=Hash::make($validate['password']);

        User::create($validate);
        return redirect('')->with('Berhasil', 'Registrasi berhasil silahkan login');
    }
}
