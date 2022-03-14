<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\JenisLayanan;
use App\Models\Kamar;
use App\Models\Layanan;
use App\Models\Tamu;
use App\Models\TypeKamar;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanController extends Controller
{
    public function management()
    {
        return view('laporan.index');
    }

    public function administrasi()
    {
        $checkins = Checkin::where('status', '!=', 'Occupied')->get();
        return view('laporan.administrasi.index', compact('checkins'));
    }

    public function view(Checkin $checkin)
    {
        //menghitung total biaya
        $tgl_cekin = strtotime($checkin->tanggal_checkin);
        $tgl_cekout = strtotime($checkin->tanggal_checkout);
        $menginap = round(($tgl_cekout - $tgl_cekin) / (60 * 60 * 24));
        $tagihan =  $checkin->total_biaya;

        //menghitung denda
        $denda = ($checkin->jumlah_tamu - $checkin->kamar->max) * $checkin->kamar->denda;


        $checkin->menginap = $menginap;
        $checkin->tagihan = $tagihan;
        $checkin->denda = $denda;

        return view('laporan.administrasi.view', compact('checkin'));
    }

    public function search(Request $request)
    {
        $checkins = Checkin::where('tanggal_checkin', '=', $request->tgl_checkin)->get();
        $jumlah = Checkin::where('tanggal_checkin', '=', $request->tgl_checkin)->count();

        if ($jumlah < 1) {
            Alert::info("Maaf", " Tidak ada data pada tanggal tersebut!");
        }
        return view('laporan.administrasi.index', compact('checkins'));
    }

    public function tamu()
    {
        $tamus = Tamu::all();

        $pdf = PDF::loadView('laporan.tamu', compact('tamus'));
        return $pdf->download('Laporan Tamu.pdf');
    }

    public function kamar()
    {
        $kamars = Kamar::all();

        $pdf = PDF::loadView('laporan.kamar', compact('kamars'));
        return $pdf->download('Laporan kamar.pdf');
    }

    public function typeKamar()
    {
        $type_kamars = TypeKamar::all();

        $pdf = PDF::loadView('laporan.type_kamar', compact('type_kamars'));
        return $pdf->download('Laporan Type Kamar.pdf');
    }

    public function layanan()
    {
        $layanans = Layanan::all();

        $pdf = PDF::loadView('laporan.layanan', compact('layanans'));
        return $pdf->download('Laporan Layanan.pdf');
    }

    public function jenisLayanan()
    {
        $jenis_layanans = JenisLayanan::all();
        $pdf = PDF::loadView('laporan.jenis_layanan', compact('jenis_layanans'));
        return $pdf->download('Laporan Jenis Layanan.pdf');
    }

    public function user()
    {
        $users = User::all();
        $pdf = PDF::loadView('laporan.user', compact('users'));
        return $pdf->download('Laporan User.pdf');
    }
}
