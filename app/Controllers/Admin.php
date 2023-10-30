<?php

namespace App\Controllers;
use App\Models\JprodukModel;
use App\Models\ProdukModel;
class Admin extends BaseController
{
    public $JprodukModel;
    public $ProdukModel;
    public function __construct() 
    {
        $this->JprodukModel = new JprodukModel ();
        $this->ProdukModel = new ProdukModel ();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/index', $data);
    }
    public function listjproduk(): string
    {
        $data = [
            'title' => 'List Jenis Produk',
            'jproduk' => $this->JprodukModel->getJproduk(),
        ];
        return view('admin/jproduk',$data);
    }
    public function listproduk(): string
    {
        $data = [
            'title' => 'List Produk',
            'produk' => $this->ProdukModel->getProduk(),
            
        ];
        return view('admin/produk',$data);
    }
}
