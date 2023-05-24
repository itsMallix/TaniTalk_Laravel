<?php

namespace App\Http\Controllers;

use App\Models\Formulasi;
use App\Models\Kalkulator;
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
    function kalkulator()
    {
        return view('petani.kalkulasi');
    }
    public function hitung(Request $request)
    {
        $luasLahan = $request->input('luaslahan');
        $pola = $request->input('pola');
        $jarakTanam1 = $request->input('jarakTanam1');
        $jarakTanam2 = $request->input('jarakTanam2');

        $hasil = Kalkulator::hitungDosisPupuk($luasLahan, $pola, $jarakTanam1, $jarakTanam2);

        return view('kalkulator.index', ['hasil' => $hasil]);
    }
    function get_data_formulasi()
    {
        $dataFormulasi = Formulasi::all();
        return view('petani.formulasi', compact('dataFormulasi'));
    }
    function show_data_formulasi($id)
    {
        $dataFormulasi_ = Formulasi::findOrFial($id);
        return view('petani.formulasiDetail', compact('dataFormulasi_'));
    }
    function cuaca()
    {
        return view('petani.cuaca');
    }
}
