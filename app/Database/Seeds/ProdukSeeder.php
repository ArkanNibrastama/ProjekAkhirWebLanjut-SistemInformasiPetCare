<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ProdukModel;
class ProdukSeeder extends Seeder
{ public function run()
    {
        $pmodel = new ProdukModel();
        $pmodel->save([
            'nama_produk' => 'Obat Flu Kucing Im Organic Doxy Cat ecer',
            'harga_produk' => '12000',
            'stok_produk' => 15,
            'foto_produk' => 'https://petshopindonesia.com/wp-content/uploads/2022/12/p000131-obat-flu-kucing-im-organic-doxy-cat-ecer-1-1.jpg.webp',
            'id_jenis' => 1,
        ]);
    }
}
