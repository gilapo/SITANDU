<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function isiDataDiri()
    {
        $data = [
            'judul' => 'isi Data Diri|POSBINDU',
            'background' => 'dark',
            'active' => 'active'
        ];
        return view('dataDiri/dataDiri', $data);
    }

    //--------------------------------------------------------------------

}
