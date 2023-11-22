<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;

class UserController extends BaseController
{
    public function index()
    {   
        $data = [
            "title"=> "Home",
        ];
        return view("user/dashboard_user", $data);
    }

    public function products(){
        $data = [
            "title"=> "Products",
        ];
        return view("user/products", $data);
    }
    public function detailsproducts(){
        $data = [
            "title"=> "Detail Products",
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
     
}
