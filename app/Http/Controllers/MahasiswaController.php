<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'emmanuel',
            'nim' => '251011700474',
            'email' => 'emmanuel0909@gmail.com',
            'prodi' => 'Sistem Informasi',
            'status' => 'Aktif'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}