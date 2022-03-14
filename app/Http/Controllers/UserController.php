<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'jabatan' => ['required'],
            'no_telp' => ['required'],
            'password' => ['required', 'string'],
        ]);

        User::create([
            "username" => $request->username,
            "email" => $request->email,
            "role" => $request->role,
            "jabatan" => $request->jabatan,
            "no_telp" => $request->no_telp,
            "password" => Hash::make($request->password),
        ]);

        Alert::success('Sukses', "Data " . $request->username . " berhasil ditambahkan!");

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'jabatan' => ['required'],
            'no_telp' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user->update($validateData);

        Alert::success('Sukses', "Data " . $request->username . " berhasil diupdate!");

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        Alert::success('Sukses', "Data " . $user->username . " berhasil dihapus!");
        return redirect('/user');
    }

    public function search(Request $request)
    {
        $users = User::where('username', 'LIKE', '%' . $request->username . '%')
            ->orderBy('username', 'asc')
            ->get();
        $jumlah = User::where('username', 'LIKE', '%' . $request->username . '%')->count();

        if ($jumlah < 1) {
            Alert::info('Tidak ada data', "Data " . $request->username . " tidak ditemukan!");
        }

        return view('user.index', compact('users'));
    }
}
