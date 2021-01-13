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
        $loggedIn = session('isLoggedIn');
        if ($loggedIn  == 1) {
            if (session('id_level') == 1) {
                $data = [
                    'pasien' => $this->model->readUSer()->getResult(),
                    'judul' => 'user administrator|POSBINDU',
                    'judul2' => 'pengaturan user',
                    'background' => 'dark',
                    'active' => 'active'
                ];
                return view('user/user', $data);
            } else if ((session('id_level') == 2)) {
                return redirect()->to(base_url('/'));
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
