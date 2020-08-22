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
        $builder->select('*');
        $builder->join('t_tidak_menular_keluarga', 't_tidak_menular_keluarga.id_penyakit_keluarga=t_pasien.id', 'left');
        $builder->join('t_tidak_menular_diri', 't_tidak_menular_diri.id_penyakit_diri_sendiri=t_pasien.id', 'left');
        $builder->join('t_faktor_resiko', 't_faktor_resiko.id_faktor_resiko=t_pasien.id', 'left');
        $builder->join('t_detail_kesehatan', 't_detail_kesehatan.id_detail_kesehatan=t_pasien.id', 'left');
        $builder->join('t_konseling', 't_konseling.id_kesimpulan=t_pasien.id', 'left');
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

    public function createRiwayatPenyakit_1($data_menular_keluarga)
    {
        $query = $this->db->table('t_tidak_menular_keluarga')->insert($data_menular_keluarga);
        return $query;
    }
    public function createRiwayatPenyakit_2($data_menular_sendiri)
    {
        $query = $this->db->table('t_tidak_menular_diri')->insert($data_menular_sendiri);
        return $query;
    }
    public function createRiwayatPenyakit_3($data_faktor_risiko)
    {
        $query = $this->db->table('t_faktor_resiko')->insert($data_faktor_risiko);
        return $query;
    }

    public function createAntropometri($data)
    {
        $query = $this->db->table('t_detail_kesehatan')->insert($data);
        return $query;
    }
    public function updateAntropometri($data, $id)
    {
        $query = $this->db->table('t_detail_kesehatan')->update($data, array('id_detail_kesehatan' => $id));
        return $query;
    }
    public function createCekKesehatan($data)
    {
        $query = $this->db->table('t_detail_kesehatan')->insert($data);
        return $query;
    }
    public function updateCekKesehatan($data, $id)
    {
        $query = $this->db->table('t_detail_kesehatan')->update($data, array('id_detail_kesehatan' => $id));
        return $query;
    }
    public function duplicateAntropometri($id)
    {
        $builder = $this->db->table('t_detail_kesehatan');
        $builder->select('*');
        $builder->where('name', $id);
        return $builder->get();
    }
    public function duplicateCekKesehatan($id)
    {
        $builder = $this->db->table('t_detail_kesehatan');
        $builder->select('*');
        $builder->where('id_detail_kesehatan', $id);
        return $builder->get();
    }

    public function createRekapData($data)
    {
        $query = $this->db->table('t_konseling')->insert($data);
        return $query;
    }
}
