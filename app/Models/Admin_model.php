<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    public function jumlahPasien()
    {
        $tahun = date("Y");
        $query = $this->db->query("SELECT tanggal_input AS Tanggal, COUNT(*) AS Jumlah From t_pasien WHERE year(tanggal_input)=$tahun GROUP BY month(tanggal_input)");
        return $query;
    }
    public function jk()
    {
        $tahun = date("Y");
        $query = $this->db->query("SELECT jeniskelamin, count(jeniskelamin) AS jumlah from t_pasien WHERE year(tanggal_input)=$tahun group by jeniskelamin");
        return $query;
    }
    public function antro()
    {
        $tahun = date("Y");
        $limit = $this->db->query("SELECT count(id_detail_kesehatan)from t_detail_kesehatan")->getRow();
        foreach ($limit as $key) {
            $query = $this->db->query("SELECT imt, lp from t_detail_kesehatan join t_pasien where year(tanggal_input)=$tahun limit $key");
            return $query;
        }
    }
    public function cekKes()
    {
        $tahun = date("Y");
        $limit = $this->db->query("SELECT count(id_detail_kesehatan)from t_detail_kesehatan")->getRow();
        foreach ($limit as $key) {
            $query = $this->db->query("SELECT sistole, diastole, gds, kolesterol, asam_urat,ekspirasi, jenis_gd, ape from t_detail_kesehatan join t_pasien where year(tanggal_input)=$tahun limit $key");
            return $query;
        }
    }
    public function readPasien()
    {
        $builder = $this->db->table('t_pasien');
        $builder->select('*');
        return $builder->get();
    }
    public function readPasienId($id)
    {
        $builder = $this->db->table('t_pasien');
        $builder->select('*');
        $builder->join('t_tidak_menular_keluarga', 't_tidak_menular_keluarga.id_penyakit_keluarga=t_pasien.id', 'left');
        $builder->join('t_tidak_menular_diri', 't_tidak_menular_diri.id_penyakit_diri_sendiri=t_pasien.id', 'left');
        $builder->join('t_faktor_resiko', 't_faktor_resiko.id_faktor_resiko=t_pasien.id', 'left');
        $builder->join('t_detail_kesehatan', 't_detail_kesehatan.id_detail_kesehatan=t_pasien.id', 'left');
        $builder->join('t_konseling', 't_konseling.id_kesimpulan=t_pasien.id', 'left');
        $builder->where('id', $id);
        return $builder->get();
    }
    public function readUser()
    {
        $builder = $this->db->table('t_user');
        $builder->select('*');
        return $builder->get();
    }
    public function readPasienGrouped()
    {
        $builder = $this->db->table('t_pasien');
        $builder->select('*');
        $builder->groupBy('nama');
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
        $builder->select('id_detail_kesehatan');
        $builder->where('id_detail_kesehatan', $id);
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
    public function updateRiwayatPenyakit_1($data, $id)
    {
        $query = $this->db->table('t_tidak_menular_keluarga')->update($data, array('id_penyakit_keluarga' => $id));
        return $query;
    }
    public function updateRiwayatPenyakit_2($data, $id)
    {
        $query = $this->db->table('t_tidak_menular_diri')->update($data, array('id_penyakit_diri_sendiri' => $id));
        return $query;
    }
    public function updateRiwayatPenyakit_3($data, $id)
    {
        $query = $this->db->table('t_faktor_resiko')->update($data, array('id_faktor_resiko' => $id));
        return $query;
    }
    public function updateRekapData($data, $id)
    {
        $query = $this->db->table('t_konseling')->update($data, array('id_kesimpulan' => $id));
        return $query;
    }
    public function deleteRiwayatPenyakit_1($id)
    {
        $query = $this->db->table('t_tidak_menular_keluarga')->delete(array('id_penyakit_keluarga' => $id));
        return $query;
    }
    public function deleteRiwayatPenyakit_2($id)
    {
        $query = $this->db->table('t_tidak_menular_diri')->delete(array('id_penyakit_diri_sendiri' => $id));
        return $query;
    }
    public function deleteRiwayatPenyakit_3($id)
    {
        $query = $this->db->table('t_faktor_resiko')->delete(array('id_faktor_resiko' => $id));
        return $query;
    }
    public function deleteCekKesehatan($id)
    {
        $query = $this->db->table('t_detail_kesehatan')->delete(array('id_detail_kesehatan' => $id));
        return $query;
    }
    public function deleteRekapData($id)
    {
        $query = $this->db->table('t_konseling')->delete(array('id_kesimpulan' => $id));
        return $query;
    }
    public function deletePasien($id)
    {
        $query = $this->db->table('t_pasien')->delete(array('id' => $id));
        return $query;
    }
}
