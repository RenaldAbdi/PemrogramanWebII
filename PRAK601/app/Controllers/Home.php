<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function beranda()
    {
        $mahasiswa = new MahasiswaModel();
        return view('beranda', [
            "data" => $mahasiswa->getNama(),
            "foto" => $mahasiswa->getFoto()
        ]);
    }
    public function biodata()
    {
        return view("biodata");
    }
}
