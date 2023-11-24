<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\InventarisModel;
use App\Models\ProductModel;
use App\Models\ServiceModel;

use Myth\Auth\Password;

class Admin extends BaseController
{
    public $InventarisModel;
    public $ProductModel;
    public $ServiceModel;
    public $adminModel;
    public function __construct() 
    {
        $this->InventarisModel = new InventarisModel ();
        $this->ProductModel = new ProductModel ();
        $this->ServiceModel = new ServiceModel ();
        $this->adminModel = new AdminModel ();

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


    public function listUser(): string
    {   

        $users = $this->adminModel->showUser(1);

        $data = [
            'title' => 'List user',
            'data' => $users,
        ];
        return view('admin/user',$data);
    }

    public function deleteUser($id)
    {
        $this->adminModel->deleteUser($id);

        return redirect()->back()->with('success','berhasil menghapus user');
    }

    public function listPegawai(): string
    {

        $pegawai = $this->adminModel->showUser(2);

        $data = [
            'title' => 'List pegawai',
            'data' => $pegawai
            
        ];
        return view('admin/pegawai',$data);
    }
    public function addPegawai(){
        $data = [
            'title'=> 'Tambah Pegawai',   
        ];
        return view ('admin/addPegawai',$data);
    }

    public function savePegawai(){
        
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password_hash' => Password::hash($this->request->getVar('password')),
            'active' => 1
            
        ];

        // dd($data);

        $this->adminModel->savePegawai($data);        

        return redirect()->to('/admin/akun-pegawai')->with('success','berhasil menambah pegawai');
    }

    public function editPegawai($id){

        $data = [
            'title' => 'Edit Pegawai',
            'pegawai' => $this->adminModel->getPegawai($id)
        ];

        return view('admin/editPegawai', $data);
    }

    public function updatePegawai($id){

        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ];

        if($this->request->getVar('password') != ''){
            $data['password_hash'] = Password::hash($this->request->getVar('password'));
        }

        $result = $this->adminModel->updatePegawai($id, $data);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Update Data!');
        }

        return redirect()->to('admin/akun-pegawai');

    }

}
