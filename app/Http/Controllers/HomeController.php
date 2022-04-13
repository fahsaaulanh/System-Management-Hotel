<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kamar_tersedia = Kamar::where('status', '=', 'Vacant')->count();
        $kamar_terpakai = Kamar::where('status', '=', 'Occupied')->count();
        $kamar_kotor = Kamar::where('status', '=', 'Dirty')->count();

        Alert('Selamat datang!');
        return view('home', compact('kamar_tersedia', 'kamar_terpakai', 'kamar_kotor'));
    }

    public function checkin()
    {
        return view('manager.room-reservation.check-in');
    }

    public function checkout()
    {
        return view('manager.room-reservation.check-out');
    }
}
