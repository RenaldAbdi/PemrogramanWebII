<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $nama = "M. Renald Abdi";
    protected $foto = "PASFOTO.JPG";

    public function getNama()
    {
        return $this->nama;
    }

    public function getFoto()
    {
        return $this->foto;
    }
}
