<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InternshipGroupModel;
use App\Models\LecturerModel;

class DosbingController extends BaseController
{
	protected $internshipGroupModel;
	public function index()
	{

		$dosen = new LecturerModel();
		$data = [
			'title' => 'Kerja Praktek - Pilih Dosen Pembimbing',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'role' => $this->role,
			'roleid' => $this->roleid,
		];
		return view('dosbing/dosbingView', $data);
	}

	public function getlecturer()
	{
		$code = $this->request->getVar('code');
		$this->studentModel = model(LecturerModel::class);
		$this->studentModel->like('LECTURERCODE', '%' . $code . '%');
		$this->studentModel->select('LECTURERCODE,EMPLOYEEID,LECTURERNAME');
		$res = $this->studentModel->findAll(5);
		// var_dump($res);
		header_remove();
		header('Content-Type: application/json');
		http_response_code(200);
		echo json_encode($res);
		exit();
	}

	public function simpandata()
	{
		helper(['form', 'url']);
		$rules = [
			'kodedosen' => 'required',
		];
		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}
		$allowedPostFields = 'kodedosen';
		$groupid = 1;
		$lecturercode = $this->request->getPost($allowedPostFields);
		$this->internshipGroupModel = model(InternshipGroupModel::class);
		$data = [
			'LECTURERCODE' => $lecturercode,
		];
		$masuk = $this->internshipGroupModel->update($groupid, $data);
		if ($masuk) {
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		} else {
			return redirect()->back()->withInput()->with('errors', $this->internshipGroupModel->errors());
		}
	}
}
