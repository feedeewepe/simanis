<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;
use App\Models\RoleModel;

class Presentasi extends BaseController
{

	public function __construct()
	{
		$this->userModel = new UserModel();
		$this->roles = new RoleModel();
		helper('form');
		$this->session = service('session');

		$this->config = config('Auth');
		$this->auth = service('authentication');
	}

	public function index()
	{
		$data = [
			'title' => 'Kerja Praktek - Surat Permohonan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'roles' => $this->roles->where('roleid >', 1)->findAll(),
			'role' => $this->role,
			'roleid' => $this->roleid,
		];
		return view('presentasi/presentasi_kp', $data);
	}
}
