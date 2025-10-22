<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matakuliah::create([
            'kode_mk' => "MK-001",
            'nama' => 'Pemrograman Berbasis Objek 1',
            'jumlah_sks' => 3,
            'prodi_id' => 1,
        ]);
        Matakuliah::create([
            'kode_mk' => "MK-002",
            'nama' => 'Pemrograman Berbasis Objek 1',
            'jumlah_sks' => 3,
            'prodi_id' => 1,
        ]);
        Matakuliah::create([
            'kode_mk' => "MI-001",
            'nama' => 'Pemrograman Terstruktur',
            'jumlah_sks' => 3,
            'prodi_id' => 1,
        ]);
        Matakuliah::create([
            'kode_mk' => "MI-002",
            'nama' => 'Algoritma dan Pemrogaman 1',
            'jumlah_sks' => 3,
            'prodi_id' => 1,
        ]);
    }
}
