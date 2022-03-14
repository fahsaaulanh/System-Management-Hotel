<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use App\Models\Layanan;
use App\Models\PesanLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $layanans = Layanan::all();

        return view('layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_layanans = JenisLayanan::all();
        return view('layanan.create', compact('jenis_layanans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'jenis_layanan_id' => 'required',
            'layanan' => 'required',
            'harga' => 'required|integer',
            'satuan' => 'required',
        ]);

        Layanan::create($validateData);

        Alert::success("Successfully", "Layanan " . $request->layanan . " berhasil ditambahkan!");

        return redirect('/layanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        $jenis_layanans = JenisLayanan::all();
        $jenis_layanan = JenisLayanan::where('id', '=', $layanan->jenis_layanan_id)->first();

        $layanan->kategori = $jenis_layanan->kategori;

        return view('layanan.edit', compact('jenis_layanans', 'layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $validateData = $request->validate([
            'jenis_layanan_id' => 'required',
            'layanan' => 'required',
            'harga' => 'required|integer',
            'satuan' => 'required',
        ]);

        $layanan->update($validateData);

        Alert::success("Yeay!", "Layanan " . $request->layanan . " berhasil diupdate!");

        return redirect('/layanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        $pesan_layanans = PesanLayanan::where('layanan_id', '=', $layanan->id)->count();

        if ($pesan_layanans == 0) {
            $layanan->delete();
            Alert::success("Sukses  ", "data berhasil dihapus! ");
            return redirect('/layanan');
        } else {
            Alert::error("Gagal :'( ", "Data tidak dapat dihapus");
            return redirect('/layanan');
        }
    }

    public function search(Request $request)
    {
        $layanans = Layanan::where('layanan', '=', $request->layanan)->get();
        $jumlah = Layanan::where('layanan', '=', $request->layanan)->count();

        if ($jumlah < 1) {
            Alert::info("Tidak ada data :'( ", "Maaf " . $request->layanan . " tidak ditemukan!");
        }
        return view('layanan.index', compact('layanans'));
    }
}
