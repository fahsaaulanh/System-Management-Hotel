<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use App\Models\Layanan;
use Error;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Error as ErrorError;
use RealRashid\SweetAlert\Facades\Alert;

class JenisLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_layanans = JenisLayanan::all();
        return view('jenis-layanan.index', compact('jenis_layanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis-layanan.create');
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
            'kategori' => 'required',
            'keterangan' => 'required',
        ]);

        JenisLayanan::create($validateData);

        Alert::success('Sukses', "Jenis Layanan " . $request->kategori . " berhasil ditambahkan!");
        return redirect('/jenis-layanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisLayanan  $jenisLayanan
     * @return \Illuminate\Http\Response
     */
    public function show(JenisLayanan $jenisLayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisLayanan  $jenisLayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisLayanan $jenisLayanan)
    {
        return view('jenis-layanan.edit', compact('jenisLayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisLayanan  $jenisLayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisLayanan $jenisLayanan)
    {
        $validateData = $request->validate([
            'kategori' => 'required',
            'keterangan' => 'required',
        ]);
        $jenisLayanan->update($validateData);

        Alert::success('Sukses', "Jenis layanan " . $request->kategori . " berhasil diupdate!");
        return redirect('/jenis-layanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisLayanan  $jenisLayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisLayanan $jenisLayanan)
    {

        $layanans = Layanan::where('jenis_layanan_id', '=', $jenisLayanan->id)->count();


        if ($layanans == 0) {
            $jenisLayanan->delete();
            Alert::success('Sukses', "Jenis layanan " . $jenisLayanan->kategori . " berhasil dihapus!");
        } else {
            Alert::error('Gagal', "Jenis layanan " . $jenisLayanan->kategori . " tidak dapat dihapus!");
        }
        return redirect('/jenis-layanan');
    }

    public function search(Request $request)
    {
        $jenis_layanans = JenisLayanan::where('kategori', 'LIKE', '%' . $request->kategori . '%')->get();
        $jumlah = JenisLayanan::where('kategori', 'LIKE', '%' . $request->kategori . '%')->count();

        if ($jumlah < 1) {
            Alert::info('Tidak ada data', "Data " . $request->kategori . " tidak ditemukan !");
        }
        return view('jenis-layanan.index', compact('jenis_layanans'));
    }
}
