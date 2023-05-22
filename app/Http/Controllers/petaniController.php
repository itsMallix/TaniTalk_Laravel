<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class petaniController extends Controller
{
    function index()
    {
        return view('petani.home');
    }
    public function get_data_penyakit()
    {
        $dataPenyakit = Penyakit::all();
        return view('petani.penyakit', compact('dataPenyakit'));
    }
    public function show_data_penyakit($id)
    {
        $dataPenyakit_ = Penyakit::findOrFail($id);
        return view('petani.penyakitDetail', compact('dataPenyakit_'));
    }
    function budidaya()
    {
        return view('petani.budidaya');
    }
    function kalkulasi()
    {
        return view('petani.kalkulasi');
    }
    function formulasi()
    {
        return view('petani.formulasi');
    }
    function cuaca()
    {
        return view('petani.cuaca');
    }
}
