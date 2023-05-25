<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Models\kalkulator;
use App\Models\Formulasi;
use Illuminate\Http\Request;

class pengelolaController extends Controller
{
    function index()
    {
        return view('pengelola.home');
    }
    public function get_data_penyakit()
    {
        $dataPenyakit = Penyakit::all();
        return view('pengelola.penyakit', compact('dataPenyakit'));
    }
    public function show_data_penyakit($id)
    {
        $dataPenyakit_ = Penyakit::findOrFail($id);
        return view('pengelola.penyakitDetail', compact('dataPenyakit_'));
    }
    function budidaya()
    {
        return view('pengelola.budidaya');
    }
    function kalkulator()
    {
        return view('pengelola.kalkulasi');
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
        return view('pengelola.formulasi', compact('dataFormulasi'));
    }
    function show_data_formulasi($id)
    {
        $dataFormulasi_ = Formulasi::findOrFial($id);
        return view('pengelola.formulasiDetail', compact('dataFormulasi_'));
    }
    function cuaca()
    {
        return view('pengelola.cuaca');
    }


    public function form_penyakit()
    {
        return view('pengelola.penyakitTambah');
    }
    function form_budidaya()
    {
        return view('pengelola.budidayaTambah');
    }
}
