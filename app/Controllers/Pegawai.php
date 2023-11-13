<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pegawai extends BaseController
{

    public function pegawai()
    {
    return view ('Pegawai/index');
}


    public function index()
    {
    

    }

    public function produk()
    {
    return view ('Pegawai/produk');

    }

    public function inventaris()
    {
    return view ('Pegawai/inventaris');

    }
}
