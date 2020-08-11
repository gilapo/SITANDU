<?php

namespace App\Models;

use CodeIgniter\Model;

class Login extends Model
{
    protected $table = 't_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'nama_user', 'username', 'password'
    ];
}
