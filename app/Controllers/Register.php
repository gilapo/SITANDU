<?php

namespace App\Controllers;

use App\Models\Register_model;

class Register extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new Register_model();
    }
    public function index()
    {
        $data = [
            'judul' => 'daftar|POSBINDU',
            'judul2' => 'daftar',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('register/register', $data);
    }
    public function createUserAct()
    {
        $data = [
            'nama_user' =>  $this->request->getPost('nama_user'),
            'username' => $this->request->getPost('username'),
            'password' =>  $this->request->getPost('password'),
            'instansi' =>  $this->request->getPost('instansi'),
            'no_identitas' =>  $this->request->getPost('no_identitas'),
            'id_level' => 3,
        ];
        $this->model->createUser($data);
        return redirect()->to('/login');
    }
    public function updateUserAct()
    {
        $id = $this->request->getPost('id');
        $data = [
            'id_level' => $this->request->getPost('id_level'),
        ];
        $this->model->updateUser($data, $id);
        return redirect()->to('/user');
    }
    public function deleteUserAct()
    {
        $id = $this->request->getPost('id');
        $this->model->deleteUser($id);
        return redirect()->to('/user');
    }
    //--------------------------------------------------------------------

}
