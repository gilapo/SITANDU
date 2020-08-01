<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Login|POSBINDU',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('login/login', $data);
    }
    public function loginAct()
    {
        if ($this->request->getPost()) {
            $userModel = new \App\Models\Login();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                if ($user['password'] ==  $password) {
                    $this->session->setFlashdata('errors', ['Password Salah']);
                } else {
                    $sessData = [
                        'username' => $user['username'],
                        'id' => $user['id_user'],
                        'isLoggedIn' => TRUE
                    ];

                    $this->session->set($sessData);

                    return redirect()->to(site_url('/'));
                }
            } else {
                $this->session->setFlashdata('errors', ['User Tidak Ditemukan']);
            }
        }
        return view('login');
    }
    public function logoutAct()
    {
        $this->session->destroy();
        return redirect()->to(site_url('login'));
    }
    //--------------------------------------------------------------------

}
