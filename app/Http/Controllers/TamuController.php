<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

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
            'no_ktp' => 'required',
            'wn' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
        ]);

        Tamu::create($validateData);

        return redirect('/tamu')->with('success', 'Profile updated!');;
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
            'no_ktp' => 'required',
            'wn' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
        ]);

        $tamu->update($validateData);

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
        $tamu->delete();
        return redirect('tamu');
    }

    public function search(Request $request)
    {
        $tamus = Tamu::where('nama', 'LIKE', '%' . $request->nama . '%')
            ->orderBy('nama', 'asc')
            ->get();

        return view('tamu.index', compact('tamus'));
    }
}
