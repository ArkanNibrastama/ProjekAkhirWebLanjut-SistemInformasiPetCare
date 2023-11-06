<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
    public function services(){
        $data = [
            "title"=> "Services",
        ];
        return view("user/services", $data);
    }   
}
