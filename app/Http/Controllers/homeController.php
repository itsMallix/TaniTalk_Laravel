<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    function index()
    {
        // return view('petani.home');
        echo 'haloo home';
        echo "<a href='logout'>logout</a>";
        
    }
    function petani()
    {
        return view('petani.home');
    }
    function pengelola()
    {
        // return view('petani.home');
        return view('pengelola.home');
    }
    function pengguna()
    {
        // return view('petani.home');
        echo 'haloo pengguna';
        echo "<a href='logout'>logout</a>";
    }

    
}
