<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'nama' => 'Administrator',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('password')
        ]);
        \App\Models\User::create([
            'nama' => 'Petugas',
            'username' => 'petugas',
            'role' => 'petugas',
            'password' => bcrypt('password')
        ]);
        \App\Models\Pelanggan::create([
            'nama' => 'ayung',
            'alamat' => 'Paledah',
            'nomor_tlp' => '083346444788'
        ]);
        \App\Models\Pelanggan::create([
            'nama' => 'ajat',
            'alamat' => 'Cikarang',
            'nomor_tlp' => '083346444798'
        ]);
        \App\Models\Kategori::create([
            'nama_kategori' =>'Makanan',
        ]);
        \App\Models\Kategori::create([
            'nama_kategori' =>'Minuman',
        ]);

    }
}
