<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;
use App\Models\Antrian;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Antrian::create([
            'nama_layanan' => 'Layanan E-KTP',
            'kode'         => 'KTP',
            'slug'         => 'layanan-e-ktp',
            'batas_antrian'=> 20,
            'deskripsi'    => 'Ambil antrian untuk mengurus perekaman E-KTP',
            'persyaratan'  => 'Berkas yang dibawa Fotocopy KK, KTP-el asli yang lama, Surat keterangan hilang kepolisian',
            'users_id'      => 1,
            'layanans_id' => 1,

        ]);

        Antrian::create([
            'nama_layanan' => 'Layanan Kartu Keluarga',
            'kode'         => 'KK',
            'slug'         => 'layanan-kartu-keluarga',
            'batas_antrian'=> 20,
            'deskripsi'    => 'Ambil antrian untuk mengurus Kartu Keluarga',
            'persyaratan'  => 'Berkas yang dibawa Fotocopy KK',
            'users_id'      => 1,
            'layanans_id' => 2,

        ]);

        Antrian::create([
            'nama_layanan' => 'Layanan Akta Kelahiran',
            'kode'         => 'AKKEL',
            'slug'         => 'layanan-akta-kelahiran',
            'batas_antrian'=> 20,
            'deskripsi'    => 'Ambil antrian untuk mengurus Akta Kelahiran',
            'persyaratan'  => 'Berkas yang dibawa Fotocopy KK',
            'users_id'      => 1,
            'layanans_id' => 3,

        ]);

        Antrian::create([
            'nama_layanan' => 'Layanan Surat Pindah',
            'kode'         => 'SP',
            'slug'         => 'layanan-surat-pindah',
            'batas_antrian'=> 20,
            'deskripsi'    => 'Ambil antrian untuk mengurus Surat Pindah',
            'persyaratan'  => 'Berkas yang dibawa Fotocopy KK',
            'users_id'      => 1,
            'layanans_id' => 4,


        ]);

        Layanan::create([
            'nama_layanan' => 'Layanan E-KTP',
            'kode'         => 'KTP',
            'deskripsi'    => 'Pelayanan dan pengurusan E-KTP',
            'users_id'      => 1
        ]);

        Layanan::create([
            'nama_layanan' => 'Layanan Kartu Keluarga',
            'kode'         => 'KK',
            'deskripsi'    => 'Pelayanan dan pengurusan Kart Keluarga (KK)',
            'users_id'      => 1
        ]);

        Layanan::create([
            'nama_layanan' => 'Layanan Akta Kelahiran',
            'kode'         => 'AKKEL',
            'deskripsi'    => 'Pelayanan dan pengurusan Akta Kelahiran',
            'users_id'      => 1
        ]);

        Layanan::create([
            'nama_layanan' => 'Layanan Surat Pindah',
            'kode'         => 'KK',
            'deskripsi'    => 'Pelayanan dan pengurusan Surat Pindah',
            'users_id'      => 1
        ]);

        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('1234'),
            'role'     => 'admin'
        ]);

        User::create([
            'name'      => 'Budii',
            'email'     => 'rbudi6823@gmail.com',
            'password'  => bcrypt('1234'),
        ]);
    }
}
