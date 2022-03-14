<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\JenisLayanan;
use App\Models\Layanan;
use App\Models\PesanLayanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PesanLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $checkins = Checkin::where('status', '=', 'Occupied')->get();
        return view('pesan-layanan.index', compact('checkins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pilihLayanan($checkin_id)
    {
        $jenis_layanans = JenisLayanan::all();
        return view('pesan-layanan.pilih-layanan', compact('jenis_layanans', 'checkin_id'));
    }

    public function setPesanan($checkin_id, $jenis_layanan_id)
    {
        $menus = Layanan::where('jenis_layanan_id', '=', $jenis_layanan_id)->get();

        return view('pesan-layanan.form-pemesanan', compact('checkin_id', 'menus'));
    }

    public function create()
    {
        //
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
            'checkin_id' => 'required',
            'layanan_id' => 'required',
            'qty' => 'required|integer',
        ]);
        PesanLayanan::create($validateData);

        Alert::success("Sukses  ", "Layanan berhasil dipesan! ");

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesanLayanan  $pesanLayanan
     * @return \Illuminate\Http\Response
     */
    public function show(PesanLayanan $pesanLayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesanLayanan  $pesanLayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(PesanLayanan $pesanLayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PesanLayanan  $pesanLayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PesanLayanan $pesanLayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesanLayanan  $pesanLayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesanLayanan $pesanLayanan)
    {
        //
    }
}
