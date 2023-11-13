<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pegawai extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Dashboard pegawai',
        ];
    return view ('Pegawai/index', $data);
}

    public function produk()
    {
        $data = [
            'title' => 'Product',
        ];
    return view ('Pegawai/produk', $data);

    }

    public function inventaris()
    {
        $data = [
            'title' => 'Inventaris',
        ];
    return view ('Pegawai/inventaris', $data);

    }
    
    public function confirm()
    {
        $data = [
            'title' => 'Confirm Booking',
        ];
    return view ('Pegawai/confirm', $data);

    }

    
    public function complete()
    {
        $data = [
            'title' => 'Complete booking',
        ];
    return view ('Pegawai/complete', $data);
    
    }

    public function history()
    {
        $data = [
            'title' => 'History booking',
        ];
    return view ('Pegawai/history', $data);
    
    }

}
