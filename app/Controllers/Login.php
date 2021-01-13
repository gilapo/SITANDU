<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $loggedIn = session('isLoggedIn');
        if ($loggedIn  == 1) {
            return redirect()->to(base_url('/'));
        } else if ($loggedIn == 0) {
            $data = [
                'judul' => 'Login|POSBINDU',
                'background' => 'dark',
                'active' => 'active'
            ];
            return view('login/login', $data);
        }
    }
    public function loginAct()
    {
        if ($this->request->getPost()) {
            $userModel = new \App\Models\Login_model();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                if ($user['password'] !=  $password) {
                    return redirect()->to(base_url('/login'));
                } else {
                    if ($user['id_level'] == 1) {
                        $sessData = [
                            'nama_user' => $user['nama_user'],
                            'instansi' => $user['instansi'],
                            'no_identitas' => $user['no_identitas'],
                            'username' => $user['username'],
                            'id' => $user['id_user'],
                            'id_level' =>  $user['id_level'],
                            'isLoggedIn' => TRUE
                        ];
                        $this->session->set($sessData);
                        return redirect()->to(base_url('/'));
                    } else if ($user['id_level'] == 2) {
                        $sessData = [
                            'nama_user' => $user['nama_user'],
                            'instansi' => $user['instansi'],
                            'no_identitas' => $user['no_identitas'],
                            'username' => $user['username'],
                            'id' => $user['id_user'],
                            'id_level' =>  $user['id_level'],
                            'isLoggedIn' => TRUE
                        ];
                        $this->session->set($sessData);
                        return redirect()->to(base_url('/'));
                    } else {
                        return redirect()->to(base_url('/login'));
                    }
                }
            } else {
                return redirect()->to(base_url('/login'));
            }
        }
        return view('login');
    }
    public function logoutAct()
    {
        $this->session->destroy();
        return redirect()->to(base_url('/login'));
    }
    //--------------------------------------------------------------------

}
