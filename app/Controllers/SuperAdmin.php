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
    public function dataKeseluruhan()
    {

        $data = [
            'pasien' => $this->model->readKeseluruhan()->getResult(),
            'judul' => 'Data Keseluruhan|POSBINDU',
            'judul2' => 'Data Keseluruhana',
            'background' => 'dark',
            'active' => 'active',
            'id' => ''
        ];
        return view('dataKeseluruhan/data', $data);
    }

    public function user()
    {
        $data = [
            'pasien' => $this->model->readKeseluruhan()->getResult(),
            'judul' => 'user administrator|POSBINDU',
            'judul2' => 'pengaturan user',
            'background' => 'dark',
            'active' => 'active',
            'id' => ''
        ];
        return view('user/user', $data);
    }
}
