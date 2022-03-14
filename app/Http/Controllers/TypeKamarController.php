<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\TypeKamar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TypeKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_kamars = TypeKamar::all();
        return view('type-kamar.index', compact('type_kamars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type-kamar.create');
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
            'jenis' => 'required',
            'harga' => 'required|integer',
            'denda' => 'required',
            'keterangan' => 'required',
        ]);

        TypeKamar::create($validateData);
        Alert::success("Successfully", "Type Kamar " . $request->jenis . " berhasil ditambahkan!");

        return redirect('/type-kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeKamar  $typeKamar
     * @return \Illuminate\Http\Response
     */
    public function show(TypeKamar $typeKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeKamar  $typeKamar
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeKamar $typeKamar)
    {
        return view('type-kamar.edit', compact('typeKamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeKamar  $typeKamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeKamar $typeKamar)
    {
        $validateData = $request->validate([
            'jenis' => 'required',
            'harga' => 'required|integer',
            'denda' => 'required',
            'keterangan' => 'required',
        ]);

        $typeKamar->update($validateData);

        Alert::success("Yeay!", "Kamar " . $request->jenis . " berhasil diupdate!");

        return redirect('/type-kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeKamar  $typeKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeKamar $typeKamar)
    {
        $kamars = Kamar::where('type_kamar_id', '=', $typeKamar->id)->count();


        if ($kamars == 0) {
            $typeKamar->delete();
            Alert::success('Sukses', "Type kamar " . $typeKamar->jenis . " berhasil dihapus!");
        } else {
            Alert::error('Gagal', "Type kamar " . $typeKamar->jenis . " tidak dapat dihapus!");
        }
        return redirect('/type-kamar');
    }

    public function search(Request $request)
    {
        $type_kamars = TypeKamar::where('jenis', 'LIKE', '%' . $request->jenis . '%')
            ->orderBy('jenis', 'asc')
            ->get();

        $jumlah = TypeKamar::where('jenis', 'LIKE', '%' . $request->jenis . '%')->count();

        if ($jumlah < 1) {
            Alert::info("Tidak ada data :'( ", "Kamar " . $request->jenis . " tidak ditemukan!");
        }

        return view('type-kamar.index', compact('type_kamars'));
    }
}
