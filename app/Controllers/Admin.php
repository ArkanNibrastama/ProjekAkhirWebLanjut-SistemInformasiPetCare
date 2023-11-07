<?php

namespace App\Controllers;
use App\Models\InventarisModel;
use App\Models\ProductModel;
use App\Models\ServiceModel;
class Admin extends BaseController
{
    public $InventarisModel;
    public $ProductModel;
    public $ServiceModel;
    public function __construct() 
    {
        $this->InventarisModel = new InventarisModel ();
        $this->ProductModel = new ProductModel ();
        $this->ServiceModel = new ServiceModel ();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/index', $data);
    }
    public function listInventaris(): string
    {
        $data = [
            'title' => 'List Jenis product',
            'inventaris' => $this->InventarisModel->getInventaris(),
        ];
        return view('admin/inventaris',$data);
    }
    public function listProduct(): string
    {
        $data = [
            'title' => 'List product',
            'product' => $this->ProductModel->getProduct(),
            
        ];
        return view('admin/product',$data);
    }
    public function listService(): string
    {
        $data = [
            'title' => 'List service',
            'service' => $this->ServiceModel->getService(),
            
        ];
        return view('admin/service',$data);
    }
}
