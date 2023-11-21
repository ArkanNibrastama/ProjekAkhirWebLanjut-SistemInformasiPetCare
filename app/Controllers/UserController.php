<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\productModel;
use App\Models\TransaksiModel;

class UserController extends BaseController
{   
    public $productModel;
    public $transaksiModel;

    public function __construct() {
        $this->productModel = new productModel();
        $this->transaksiModel = new TransaksiModel();
    }
    public function index()
    {   
        $data = [
            "title"=> "Home",
        ];
        return view("user/dashboard_user", $data);
    }

    public function products(){

        //ambil list product dari db

        $data = [
            "title"=> "Products",
            'product'=> $this->productModel->getproduct()
        ];
        return view("user/products", $data);
    }
    public function detailsproducts($id){
        $data = [
            "title"=> "Detail Products",
            'product'=> $this->productModel->getproduct($id)
        ];
        return view("user/detail_products", $data);
    }
    public function formslayanan(){
        $data = [
            "title"=> "Form Layanan",
        ];
        return view("user/formlayanan", $data);
    }
    public function services(){
        $data = [
            "title"=> "Services",
        ];
        return view("user/services", $data);
    }  

    public function buyProduct($id){
        $data = [
            'id_user' => user_id(),
            'id_product' => $id,
            'tanggal_transaksi' => date("Y-m-d h:i:s"),
            'alamat' => $this->request->getVar('alamat'),
            'jumlah_barang' => $this->request->getVar('jumlah'),
            'total_transaksi' => $this->request->getVar('jumlah')*$this->request->getVar('harga')
        ];

        // dd($data);

        $this->transaksiModel->beliProduct($data);

        return redirect()->to('user/product')->with('success', 'product berhasil dibeli');

    }
     
}
