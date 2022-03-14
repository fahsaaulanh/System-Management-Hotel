<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Tamu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamus = Tamu::all();

        return view('tamu.index', compact('tamus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tamu.create');
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
            'nama' => 'required',
            'jk' => 'required',
            'usia' => 'required|integer',
            'jenis_identitas' => 'required',
            'no_ktp' => 'required',
            'wn' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
        ]);

        Tamu::create($validateData);
        Alert::success('Sukses', "Data " . $request->nama . " berhasil ditambahkan!");

        return redirect('/tamu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(Tamu $tamu)
    {
        return view('tamu.show', compact('tamu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamu $tamu)
    {

        return view('tamu.edit', compact('tamu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tamu $tamu)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'usia' => 'required|integer',
            'jenis_identitas' => 'required',
            'no_ktp' => 'required',
            'wn' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
        ]);

        $tamu->update($validateData);

        Alert::success('Sukses', "Data " . $request->nama . " berhasil diupdate!");

        return redirect('/tamu')->with('pesan', "Tamu $request->nama berhasil update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamu $tamu)
    {
        $checkins = Checkin::where('tamu_id', '=', $tamu->id)->count();


        if ($checkins == 0) {
            $tamu->delete();
            Alert::succes('Sukses', "Data " . $tamu->nama . " berhasil dihapus!");
        } else {
            Alert::error('Gagal', "Data " . $tamu->nama . " tidak dapat dihapus!");
        }

        return redirect('tamu');
    }

    public function search(Request $request)
    {
        $tamus = Tamu::where('nama', 'LIKE', '%' . $request->nama . '%')
            ->orderBy('nama', 'asc')
            ->get();
        $jumlah = Tamu::where('nama', 'LIKE', '%' . $request->nama . '%')->count();

        if ($jumlah < 1) {
            Alert::info('Tidak ada data', "Data " . $request->nama . " tidak ditemukan!");
        }

        return view('tamu.index', compact('tamus'));
    }
}
