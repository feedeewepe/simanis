<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Survey;

class SurveyController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Kerja Praktek - Daftar',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup
		];
		return view('survey/download_template', $data);
	}
}
