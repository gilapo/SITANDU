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

    public function updatePasienAct()
    {

        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $this->model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deletePasienAct()
    {

        $id = $this->request->getPost('id');
        $this->model->deletePasien($id);
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

    public function updateRiwayatPenyakitAct()
    {

        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $this->model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deleteRiwayatPenyakitAct()
    {

        $id = $this->request->getPost('id');
        $this->model->deletePasien($id);
        return redirect()->to('/home');
    }
    public function isiAntropometri()
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

    public function updateAntropometriAct()
    {

        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $this->model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deleteAntropometriAct()
    {

        $id = $this->request->getPost('id');
        $this->model->deletePasien($id);
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

    public function updateCekKesehatanAct()
    {

        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $this->model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deleteCekKesehatanAct()
    {

        $id = $this->request->getPost('id');
        $this->model->deletePasien($id);
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

    public function updateRekapDataAct()
    {

        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $this->model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deleteRekapDataAct()
    {

        $id = $this->request->getPost('id');
        $this->model->deletePasien($id);
        return redirect()->to('/home');
    }
    //--------------------------------------------------------------------
    public function dataKeseluruhan()
    {

        $data = [
            'pasien' => $this->model->readPasien()->getResult(),
            'judul' => 'Data Keseluruhan|POSBINDU',
            'judul2' => 'Data Keseluruhana',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('dataKeseluruhan/dataKeseluruhan', $data);
    }
}
