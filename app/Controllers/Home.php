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
			'judul' => 'Home|POSBINDU',
			'judul2' => 'Home',
			'background' => 'dark',
			'active' => 'active'
		];
		return view('dashboard/dashboard', $data);
	}

	//--------------------------------------------------------------------

}
