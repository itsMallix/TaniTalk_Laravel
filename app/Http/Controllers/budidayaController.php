<?php

namespace App\Http\Controllers;

use App\Models\Budidaya;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class budidayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlah = 1;
        if(strlen($katakunci)){
            $data = budidaya::where('jenis_budidaya', 'like', "%$katakunci%")
                ->orWhere('nama_budidaya', 'like', "%$katakunci%")
                ->paginate($jumlah);
        }else{
            // $data = budidaya::orderBy('id', 'desc')->paginate($jumlah);
            $data = Budidaya::orderBy('nama_budidaya','desc')->paginate(50);
        }

        return view('pengelola.budidayaEdit')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengelola.budidayaTambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_budidaya', $request->nama_budidaya);
        Session::flash('jenis_budidaya', $request->jenis_budidaya);
        Session::flash('deskripsi', $request->deskripsi);
        $request->validate([
            'nama_budidaya' => 'required',
            'jenis_budidaya' => 'required',
            'deskripsi' => 'required'
        ],[
            'nama_budidaya.required'=>'Nama Budidaya wajib diisi',
            'jenis_budidaya.required'=>'jenis Budidaya wajib diisi',
            'deskripsi.required'=>'Deskripsi wajib diisi',
            // 'gambar.required'=>'Gambar Budidaya wajib diisi',
        ]);
        $data = [
            'nama_budidaya'=> $request->nama_budidaya,
            'jenis_budidaya'=> $request->jenis_budidaya,
            'deskripsi'=> $request->deskripsi,
            // 'gambar'=> $request->gambar
        ];
        Budidaya::create($data);
        return redirect()->to('home/pengelola/budidaya')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Budidaya::where('id', $id)->first();
        return view('pengelola.budidayaEditData')->with('data', $data);
        // return 'pantek' . $id ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_budidaya' => 'required',
            'jenis_budidaya' => 'required',
            'deskripsi' => 'required'
        ],[
            'nama_budidaya.required'=>'Nama Budidaya wajib diisi',
            'jenis_budidaya.required'=>'jenis Budidaya wajib diisi',
            'deskripsi.required'=>'Deskripsi wajib diisi',
            // 'gambar.required'=>'Gambar Budidaya wajib diisi',
        ]);
        $data = [
            'nama_budidaya'=> $request->nama_budidaya,
            'jenis_budidaya'=> $request->jenis_budidaya,
            'deskripsi'=> $request->deskripsi,
            // 'gambar'=> $request->gambar
        ];
        Budidaya::where('id', $id)->update($data);
        return redirect()->to('home/pengelola/budidaya/tambah')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        budidaya::where('id', $id)->delete();
        return redirect()->to('home/pengelola/budidaya/tambah')->with('success', 'Data berhasil dihapus');
    }
}
