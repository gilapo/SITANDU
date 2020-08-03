<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function isiDataDiri()
    {
        $model = new \App\Models\Admin();
        $data = [
            'pasien' => $model->readPasien()->getResult(),
            'judul' => 'isi Data Diri|POSBINDU',
            'judul2' => 'DATA DIRI',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('dataDiri/dataDiri', $data);
    }
    public function createDataDiriAct()
    {
        $model = new \App\Models\Admin();
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->createPasien($data);
        return redirect()->to('/home');
    }

    public function updatePasienAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deletePasienAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $model->deletePasien($id);
        return redirect()->to('/home');
    }
    public function isiRiwayatPenyakit()
    {
        $data = [
            'judul' => 'Riwayat Penyakit|POSBINDU',
            'judul2' => 'RIWAYAT PENYAKIT',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('riwayatPenyakit/riwayatPenyakit', $data);
    }
    public function createRiwayatPenyakitAct()
    {
        $model = new \App\Models\Admin();
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->createPasien($data);
        return redirect()->to('/home');
    }

    public function updateRiwayatPenyakitAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deleteRiwayatPenyakitAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $model->deletePasien($id);
        return redirect()->to('/home');
    }
    public function isiAntropometri()
    {
        $data = [
            'judul' => 'Antropometri|POSBINDU',
            'judul2' => 'Antropometri',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('antropometri/antropometri', $data);
    }
    public function createAntropometriAct()
    {
        $model = new \App\Models\Admin();
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->createPasien($data);
        return redirect()->to('/home');
    }

    public function updateAntropometriAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deleteAntropometriAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $model->deletePasien($id);
        return redirect()->to('/home');
    }
    public function isiCekKesehatan()
    {
        $data = [
            'judul' => 'Cek Kesehatan|POSBINDU',
            'judul2' => 'Cek Kesehatan',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('cekKesehatan/cekKesehatan', $data);
    }
    public function createCekKesehatanAct()
    {
        $model = new \App\Models\Admin();
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->createPasien($data);
        return redirect()->to('/home');
    }

    public function updateCekKesehatanAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deleteCekKesehatanAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $model->deletePasien($id);
        return redirect()->to('/home');
    }
    public function isiRekapData()
    {
        $data = [
            'judul' => 'Rekap Data|POSBINDU',
            'judul2' => 'Rekap Data',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('rekapData/rekapData', $data);
    }
    public function createRekapDataAct()
    {
        $model = new \App\Models\Admin();
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->createPasien($data);
        return redirect()->to('/home');
    }

    public function updateRekapDataAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $data = [
            'identitas' => $this->request->getPost('identitas'),
            'nama' =>  $this->request->getPost('nama'),
            'jabatan' =>  $this->request->getPost('jabatan'),
            'usia' => $this->request->getPost('usia'),
            'jeniskelamin' =>  $this->request->getPost('jeniskelamin'),
        ];
        $model->updatePasien($data, $id);
        return redirect()->to('/home');
    }

    public function deleteRekapDataAct()
    {
        $model = new \App\Models\Admin();
        $id = $this->request->getPost('id');
        $model->deletePasien($id);
        return redirect()->to('/home');
    }
    //--------------------------------------------------------------------
    public function dataKeseluruhan()
    {
        $model = new \App\Models\Admin();
        $data = [
            'pasien' => $model->readPasien()->getResult(),
            'judul' => 'Data Keseluruhan|POSBINDU',
            'judul2' => 'Data Keseluruhana',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('dataKeseluruhan/dataKeseluruhan', $data);
    }
}
