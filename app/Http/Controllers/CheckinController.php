<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Kamar;
use App\Models\Tamu;
use App\Models\TypeKamar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamars = Kamar::where('status', '=', 'Vacant')->get();

        return view('check-in.index', compact('kamars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tamus = Tamu::orderBy('created_at', 'desc')->get();
        //generate kode invoice
        $tanggal = carbon::now()->format('Ymd');
        $urutan = Checkin::whereDate('created_at', '=', $tanggal)->count() + 1;
        $kode_invoice = 'INV-' . $tanggal . '-' . $urutan;

        return view('check-in.create', compact('kode_invoice', 'tamus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //merge req status
        $request->merge(['status' => "Occupied"]);

        //generate kode invoice
        $tanggal = date('Ymd');
        $urutan = Checkin::whereDate('created_at', '=', $tanggal)->count() + 1;
        $kode_invoice = 'INV-' . $tanggal . '-' . $urutan;

        //menghitung total biaya
        $tgl_cekin = strtotime($request->tanggal_checkin);
        $tgl_cekout = strtotime($request->tanggal_checkout);
        $menginap = round(($tgl_cekout - $tgl_cekin) / (60 * 60 * 24));
        $total_biaya = $request->harga * $menginap;

        $request->merge(['total_biaya' => $total_biaya]);
        $request->merge(['kd_invoice' => $kode_invoice]);


        $validateData = $request->validate([
            'kd_invoice' => 'required',
            'kamar_id' => 'required',
            'gelar_tamu' => 'required',
            'tamu_id' => 'required',
            'jumlah_tamu' => 'required',
            'tanggal_checkin' => 'required',
            'tanggal_checkout' => 'required',
            'deposit' => 'required',
            'total_biaya' => 'required',
            'status' => 'required',
        ]);



        Checkin::create($validateData);

        Alert::success("Sukses  ", "Berhasil CheckIn! ");

        return redirect('/checkin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function show(Checkin $checkin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkin $checkin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkin $checkin)
    {

        $checkin->update(['status' => $request->status]);

        if ($request->route == 'checkout') {
            Alert::success('Sukses', "Berhasil checkout!");
        } else {
            Alert::success('Sukses', "Status kamar berubah!");
        }

        return redirect('/' . $request->route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkin $checkin)
    {
        //
    }

    public function checkout()
    {
        $checkins = Checkin::where('status', '=', 'Occupied')->get();
        return view('check-out.index', compact('checkins'));
    }

    public function view(Checkin $checkin)
    {
        //menghitung total biaya
        $tgl_cekin = strtotime($checkin->tanggal_checkin);
        $tgl_cekout = strtotime($checkin->tanggal_checkout);
        $menginap = round(($tgl_cekout - $tgl_cekin) / (60 * 60 * 24));
        $tagihan =  $checkin->deposit - $checkin->total_biaya;

        //menghitung denda
        $denda = ($checkin->jumlah_tamu - $checkin->kamar->max) * $checkin->kamar->denda;


        $checkin->menginap = $menginap;
        $checkin->tagihan = $tagihan;
        $checkin->denda = $denda;

        return view('check-out.view', compact('checkin'));
    }

    public function cleanUp()
    {
        $checkins = Checkin::where('status', '=', 'Dirty')->get();
        return view('check-out.clean', compact('checkins'));
    }
}
