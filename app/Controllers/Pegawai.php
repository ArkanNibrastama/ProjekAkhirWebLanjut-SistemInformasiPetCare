<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pegawai extends BaseController
{

    public function index()
    {
    return view ('Pegawai/index');
}

    public function produk()
    {
    return view ('Pegawai/produk');

    }

    public function inventaris()
    {
    return view ('Pegawai/inventaris');

    }

    public function confirm()
    {
    return view ('Pegawai/confirm');

    }

    
    public function complete()
    {
    return view ('Pegawai/complete');
    
    }

    public function history()
    {
    return view ('Pegawai/history');
    
    }

}
