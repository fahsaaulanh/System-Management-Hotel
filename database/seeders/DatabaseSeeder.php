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
            "username" => "Maulana",
            "email" => "maulana@gmail.com",
            "role" => "HK",
            "jabatan" => "House Keeping",
            "no_telp" => "085780700419",
            "password" => Hash::make('admin'),
        ]);
    }
}
