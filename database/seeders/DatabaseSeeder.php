<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "username" => "Manager",
            "email" => "manager@gmail.com",
            "role" => "Manager",
            "jabatan" => "Manager Hotel",
            "no_telp" => "085780700419",
            "password" => Hash::make('manager123'),
        ]);
    }
}
