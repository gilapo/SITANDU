<?php

namespace App\Controllers;

use App\Models\Admin_model;

class SuperAdmin extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new Admin_model();
    }


    public function user()
    {
        $data = [
            'pasien' => $this->model->readKeseluruhan()->getResult(),
            'judul' => 'user administrator|POSBINDU',
            'judul2' => 'pengaturan user',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('user/user', $data);
    }
}
