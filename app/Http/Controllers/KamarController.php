<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Kamar;
use App\Models\TypeKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_kamars = TypeKamar::all();
        $kamars = DB::table('kamars')
            ->join('type_kamars', 'kamars.type_kamar_id', '=', 'type_kamars.id')
            ->select('kamars.id', 'kamars.no_kamar', 'kamars.type_kamar_id', 'type_kamars.jenis', 'kamars.max', 'kamars.status')
            ->get();
        return view('kamar.index', compact('kamars', 'type_kamars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_kamars = TypeKamar::all();
        return view('kamar.create', compact('type_kamars'));
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
            'no_kamar' => 'required',
            'type_kamar_id' => 'required',
            'max' => 'required',
            'status' => 'required',
        ]);

        Kamar::create($validateData);

        Alert::success("Successfully", "Kamar " . $request->no_kamar . " tidak ditemukan!");

        return redirect('/kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        //get All data dari type kamar
        $type_kamars = TypeKamar::all();
        //get 1 data dari type kamar dimana id type kamar = type_kamar_id dari tabel kamar
        $type_kamar = TypeKamar::where('id', '=', $kamar->type_kamar_id)->first();
        //menambahkan collection jenis ke $kamar
        $kamar->jenis = $type_kamar->jenis;

        return view('kamar.edit', compact('kamar', 'type_kamars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {

        $validateData = $request->validate([
            'no_kamar' => 'required',
            'type_kamar_id' => 'required',
            'max' => 'required',
            'status' => 'required',
        ]);

        $kamar->update($validateData);
        Alert::success("Yeay!", "Kamar " . $request->no_kamar . " berhasil diupdate!");
        return redirect('/kamar')->with('pesan', "Kamar $request->no_kamar berhasil di Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $checkins = Checkin::where('kamar_id', '=', $kamar->id)->count();


        if ($checkins == 0) {
            $kamar->delete();
            Alert::success('Sukses', "Data kamar " . $kamar->no_kamar . " berhasil dihapus!");
        } else {
            Alert::error('Gagal', "Data kamar " . $kamar->no_kamar . " tidak dapat dihapus!");
        }
        return redirect('/kamar')->with('pesan', "kamar $kamar->nomor berhasil dihapus");
    }

    public function search(Request $request)
    {
        $kamars = Kamar::where('no_kamar', '=', $request->no_kamar)->get();
        $jumlah = Kamar::where('no_kamar', '=', $request->no_kamar)->count();

        if ($jumlah < 1) {
            Alert::info("Tidak ada data :'(", "Kamar " . $request->no_kamar . " tidak ditemukan!");
        }
        return view('kamar.index', compact('kamars'));
    }
}
