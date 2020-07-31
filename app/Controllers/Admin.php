<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function isiDataDiri()
    {
        $data = [
            'judul' => 'isi Data Diri|POSBINDU',
            'judul2' => 'DATA DIRI',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('dataDiri/dataDiri', $data);
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
    //--------------------------------------------------------------------

}
