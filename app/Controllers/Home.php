<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'Home|POSBINDU',
			'judul2' => 'Home',
			'background' => 'dark',
			'active' => 'active'
		];
		return view('dashboard/dashboard', $data);
	}

	//--------------------------------------------------------------------

}
