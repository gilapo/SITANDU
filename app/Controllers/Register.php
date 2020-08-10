<?php

namespace App\Controllers;

class Register extends BaseController
{
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

    //--------------------------------------------------------------------

}
