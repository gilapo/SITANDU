<?php

namespace App\Controllers;

use App\Models\Admin_model;

class Home extends BaseController
{
	protected $model;
	public function __construct()
	{
		$this->model = new Admin_model();
	}
	public function index()
	{
		$loggedIn = session('isLoggedIn');
		if ($loggedIn  == 1) {
			$data = [
				'pasien' => $this->model->readPasien()->getResult(),
				'jumlah_pasien' => $this->model->jumlahPasien()->getResultArray(),
				'jk' => $this->model->jk()->getResultArray(),
				'antroY' => $this->model->antroY()->getResultArray(),
				'cekesY' => $this->model->cekKesY()->getResultArray(),
				'antroM' => $this->model->antroM()->getResultArray(),
				'cekesM' => $this->model->cekKesM()->getResultArray(),
				'antroD' => $this->model->antroD()->getResultArray(),
				'cekesD' => $this->model->cekKesD()->getResultArray(),
				'judul' => 'Home|POSBINDU',
				'judul2' => 'Home',
				'background' => 'dark',
				'active' => 'active',
				'id' => ''
			];
			//dd($data = ['antro' => $this->model->antro()->getResultArray()]);
			return view('dashboard/dashboard', $data);
		} else if ($loggedIn  == 0) {
			return redirect()->to(base_url('/login'));
		}
	}

	//--------------------------------------------------------------------

}
