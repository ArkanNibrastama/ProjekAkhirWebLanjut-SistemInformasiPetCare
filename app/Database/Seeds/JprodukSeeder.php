<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\JprodukModel;
class JprodukSeeder extends Seeder
{
    public function run()
    {
        $jpmodel = new JprodukModel();
        $jpmodel->save([
            'namajenis_produk' => 'Obat & Vitamin'
        ]);
        $jpmodel->save([
            'namajenis_produk' => 'Makanan'
        ]);
        $jpmodel->save([
            'namajenis_produk' => 'Peralatan'
        ]);
    }
}
