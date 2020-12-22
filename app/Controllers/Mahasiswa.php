<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home'
        ];

        return view('mahasiswa/index', $data);
    }

    public function data()
    {
        $data = [
            'judul' => 'Data Mahasiswa'
        ];
        return view('mahasiswa/mahasiswa', $data);
    }

    public function about()
    {
        $data = [
            'judul' => 'About'
        ];
        return view('mahasiswa/about', $data);
    }
}
