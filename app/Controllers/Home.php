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
		$data = [
			'pasien' => $this->model->readPasien()->getResult(),
			'jumlah_pasien' => $this->model->jumlahPasien()->getResultArray(),
			'jk' => $this->model->jk()->getResultArray(),
			'antro' => $this->model->antro()->getResultArray(),
			'cekes' => $this->model->cekKes()->getResultArray(),
			'judul' => 'Home|POSBINDU',
			'judul2' => 'Home',
			'background' => 'dark',
			'active' => 'active',
			'id' => ''
		];
		//dd($data = ['antro' => $this->model->antro()->getResultArray()]);
		return view('dashboard/dashboard', $data);
	}

	//--------------------------------------------------------------------

}
