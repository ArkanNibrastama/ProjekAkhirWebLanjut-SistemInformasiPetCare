<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;
class AkunSeeder extends Seeder
{
    public function run()
    {
        $Umodel = new UserModel();
        $Umodel->save([
            'username' => 'user', 
            'password_hash'=> password_hash('petcare1234', PASSWORD_DEFAULT),
            'role'=>1,
            'active'=>1,
            'email'=>'user@gmail.com'
        ]);
        $Umodel->save([
            'username' => 'pegawai', 
            'password_hash'=> password_hash('petcare1234', PASSWORD_DEFAULT),
            'role'=>2,
            'active'=>1,
            'email'=>'pegawai@gmail.com'
        ]);
        $Umodel->save([
            'username' => 'admin', 
            'password_hash'=> password_hash('petcare1234', PASSWORD_DEFAULT),
            'role'=>3,
            'active'=>1,
            'email'=>'admin@gmail.com'
        ]);
    }
}
