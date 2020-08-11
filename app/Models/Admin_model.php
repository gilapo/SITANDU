<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    public function readPasien()
    {
        $builder = $this->db->table('t_pasien');
        return $builder->get();
    }

    public function readKeseluruhan()
    {
        $builder = $this->db->table('t_pasien');
        $builder->db->table('t_detail_kesehatan');
        $builder->db->table('t_faktor_resiko');
        $builder->db->table('t_konseling');
        $builder->db->table('t_tidak_menular_diri');
        $builder->db->table('t_tidak_menular_keluarga');
        $builder->select('*');
        $builder->join('t_pasien', 't_pasien.id = t_detail_kesehatan.id');
        $builder->join('t_pasien', 't_pasien.id = t_faktor_resiko.id_faktor_resiko');
        $builder->join('t_pasien', 't_pasien.id = t_konseling .id_kesimpulan');
        $builder->join('t_pasien', 't_pasien.id = t_tidak_menular_diri .id_penyakit_diri_sendiri');
        $builder->join('t_pasien', 't_pasien.id = t_tidak_menular_keluarga.id_penyakit_keluarga ');
        return $builder->get();
    }
    public function createPasien($data)
    {
        $query = $this->db->table('t_pasien')->insert($data);
        return $query;
    }

    public function updatePasien($data, $id)
    {
        $query = $this->db->table('t_pasien')->update($data, array('id' => $id));
        return $query;
    }

    public function deletePasien($id)
    {
        $query = $this->db->table('t_pasien')->delete(array('id' => $id));
        return $query;
    }
    public function readRiwayatPenyakit()
    {
        $builder = $this->db->table('t_pasien');
        return $builder->get();
    }

    public function createRiwayatPenyakit($data)
    {
        $query = $this->db->table('t_pasien')->insert($data);
        return $query;
    }

    public function updateRiwayatPenyakit($data, $id)
    {
        $query = $this->db->table('t_pasien')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteRiwayatPenyakit($id)
    {
        $query = $this->db->table('t_pasien')->delete(array('id' => $id));
        return $query;
    }
    public function readAntropometri()
    {
        $builder = $this->db->table('t_pasien');
        return $builder->get();
    }

    public function createAntropometri($data)
    {
        $query = $this->db->table('t_pasien')->insert($data);
        return $query;
    }

    public function updateAntropometri($data, $id)
    {
        $query = $this->db->table('t_pasien')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteAntropometri($id)
    {
        $query = $this->db->table('t_pasien')->delete(array('id' => $id));
        return $query;
    }
    public function readCekKesehatan()
    {
        $builder = $this->db->table('t_pasien');
        return $builder->get();
    }

    public function createCekKesehatan($data)
    {
        $query = $this->db->table('t_pasien')->insert($data);
        return $query;
    }

    public function updateCekKesehatan($data, $id)
    {
        $query = $this->db->table('t_pasien')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteCekKesehatan($id)
    {
        $query = $this->db->table('t_pasien')->delete(array('id' => $id));
        return $query;
    }
    public function readRekapDatan()
    {
        $builder = $this->db->table('t_pasien');
        return $builder->get();
    }

    public function createRekapData($data)
    {
        $query = $this->db->table('t_pasien')->insert($data);
        return $query;
    }

    public function updateRekapData($data, $id)
    {
        $query = $this->db->table('t_pasien')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteRekapData($id)
    {
        $query = $this->db->table('t_pasien')->delete(array('id' => $id));
        return $query;
    }
}
