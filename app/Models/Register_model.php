<?php

namespace App\Models;

use CodeIgniter\Model;

class Register_model extends Model
{
    public function createUser($data)
    {
        $query = $this->db->table('t_user')->insert($data);
        return $query;
    }
    public function updateUser($data, $id)
    {
        $query = $this->db->table('t_user')->update($data, array('id_user' => $id));
        return $query;
    }
    public function deleteUser($id)
    {
        $query = $this->db->table('t_user')->delete(array('id_user' => $id));
        return $query;
    }
}
