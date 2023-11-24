<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;
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
    public function simpan_data()
    {
        $bookingModel = new BookingModel();

        $data = [
            'nama_pemilik' => $this->request->getPost('nama_pemilik'),
            'email' => $this->request->getPost('email'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'nama_hewan' => $this->request->getPost('nama_hewan'),
            'jenis_hewan' => $this->request->getPost('jenis_hewan'),
            'usia_hewan' => $this->request->getPost('usia_hewan'),
            'layanan' => $this->request->getPost('layanan'),
            'tanggal_booking' => $this->request->getPost('tanggal_booking'),
        ];

        $bookingModel->insert($data);

        return redirect()->to(base_url('user/services'))->with('success', 'Data berhasil disimpan');
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
