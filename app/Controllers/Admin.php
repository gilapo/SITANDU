<?php

namespace App\Controllers;

use App\Models\Admin_model;

class Admin extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new Admin_model();
    }
    public function isiDataDiri()
    {

        $data = [
            'pasien' => $this->model->readPasien()->getResult(),
            'judul' => 'isi Data Diri|POSBINDU',
            'judul2' => 'DATA DIRI',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('dataDiri/dataDiri', $data);
    }
    public function createDataDiriAct()
    {

        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $this->model->createPasien($data);
        return redirect()->to('/home');
    }

    public function isiRiwayatPenyakit()
    {
        $data = [
            'pasien' => $this->model->readPasien()->getResult(),
            'judul' => 'Riwayat Penyakit|POSBINDU',
            'judul2' => 'RIWAYAT PENYAKIT',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('riwayatPenyakit/riwayatPenyakit', $data);
    }
    public function createRiwayatPenyakitAct()
    {
        $id = $this->request->getPost('id');
        $data_menular_keluarga = [
            'id_penyakit_keluarga' => $this->request->getPost('id_penyakit_keluarga'),
            'DM_1' =>  $this->request->getPost('DM_1'),
            'HT_1' => $this->request->getPost('HT_1'),
            'jantung_1' =>  $this->request->getPost('jantung_1'),
            'stroke_1' =>  $this->request->getPost('stroke_1'),
            'asma_1' =>  $this->request->getPost('asma_1'),
            'kanker_1' => $this->request->getPost('kanker_1'),
            'kolesterol_1' =>  $this->request->getPost('kolesterol_1'),
        ];
        $data_menular_sendiri = [
            'id_penyakit_diri_sendiri' => $this->request->getPost('id_penyakit_diri_sendiri'),
            'DM_2' =>  $this->request->getPost('DM_2'),
            'HT_2' => $this->request->getPost('HT_2'),
            'jantung_2' =>  $this->request->getPost('jantung_2'),
            'stroke_2' =>  $this->request->getPost('stroke_2'),
            'asma_2' =>  $this->request->getPost('asma_2'),
            'kanker_2' => $this->request->getPost('kanker_2'),
            'kolesterol_2' =>  $this->request->getPost('kolesterol_2'),
        ];
        $data_faktor_risiko = [
            'id_faktor_resiko' => $this->request->getPost('id_faktor_resiko'),
            'merokok' =>  $this->request->getPost('merokok'),
            'sayur_buah' =>  $this->request->getPost('sayur_buah'),
            'kurang_aktivitas_fisik' => $this->request->getPost('kurang_aktivitas_fisik'),
            'alkohol' =>  $this->request->getPost('alkohol'),
            'sulit_tidur_napsu_makan' =>  $this->request->getPost('sulit_tidur_napsu_makan'),
        ];
        $data_status = [
            'status_meja_2'        => $this->request->getPost('status_meja_2'),
        ];
        $this->model->createRiwayatPenyakit_1($data_menular_keluarga);
        $this->model->createRiwayatPenyakit_2($data_menular_sendiri);
        $this->model->createRiwayatPenyakit_3($data_faktor_risiko);
        $this->model->updatePasien($data_status, $id);
        return redirect()->to('/home');
    }
    function isiAntropometri()
    {
        $data = [
            'pasien' => $this->model->readPasien()->getResult(),
            'judul' => 'Antropometri|POSBINDU',
            'judul2' => 'Antropometri',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('antropometri/antropometri', $data);
    }
    public function createAntropometriAct()
    {
        $id = $this->request->getPost('id');
        $data = [
            'id_detail_kesehatan' => $this->request->getPost('id_detail_kesehatan'),
            'bb' =>  $this->request->getPost('bb'),
            'tb' => $this->request->getPost('tb'),
            'imt' =>  $this->request->getPost('imt'),
            'lp' =>  $this->request->getPost('lp'),
            'ape' =>  $this->request->getPost('ape'),
        ];
        $data_status = [
            'status_meja_3'        => $this->request->getPost('status_meja_3'),
        ];
        $this->model->createAntropometri($data);
        $this->model->updatePasien($data_status, $id);
        return redirect()->to('/home');
    }

    public function isiCekKesehatan()
    {
        $data = [
            'pasien' => $this->model->readPasien()->getResult(),
            'judul' => 'Cek Kesehatan|POSBINDU',
            'judul2' => 'Cek Kesehatan',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('cekKesehatan/cekKesehatan', $data);
    }
    public function createCekKesehatanAct()
    {
        $id = $this->request->getPost('id');
        $data = [
            'id_detail_kesehatan' => $this->request->getPost('id_detail_kesehatan'),
            'sistole' =>  $this->request->getPost('sistole'),
            'diastole' => $this->request->getPost('diastole'),
            'gds' =>  $this->request->getPost('gds'),
            'kolesterol' =>  $this->request->getPost('kolesterol'),
            'asam_urat' =>  $this->request->getPost('asam_urat'),
            'ekspirasi' =>  $this->request->getPost('ekspirasi'),
            'benjolan_pada_payudara' =>  $this->request->getPost('benjolan_pada_payudara'),
            'iva' =>  $this->request->getPost('iva'),
            'kadar_alkohol' =>  $this->request->getPost('kadar_alkohol'),
            'tes_amfetamin' =>  $this->request->getPost('tes_amfetamin'),
        ];
        $data_status = [
            'status_meja_4'        => $this->request->getPost('status_meja_4'),
        ];
        $this->model->createCekKesehatan($data);
        $this->model->updatePasien($data_status, $id);
        return redirect()->to('/home');
    }

    public function isiRekapData()
    {
        $data = [
            'pasien' => $this->model->readPasien()->getResult(),
            'judul' => 'Rekap Data|POSBINDU',
            'judul2' => 'Rekap Data',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('rekapData/rekapData', $data);
    }
    public function createRekapDataAct()
    {

        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $this->model->createPasien($data);
        return redirect()->to('/home');
    }
    //--------------------------------------------------------------------
    public function dataKeseluruhan()
    {

        $data = [
            'pasien' => $this->model->readKeseluruhan()->getResult(),
            'judul' => 'Data Keseluruhan|POSBINDU',
            'judul2' => 'Data Keseluruhana',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('dataKeseluruhan/dataKeseluruhan', $data);
    }

    public function user()
    {
        $data = [
            'pasien' => $this->model->readKeseluruhan()->getResult(),
            'judul' => 'user administrator|POSBINDU',
            'judul2' => 'pengaturan user',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('user/user', $data);
    }
}
