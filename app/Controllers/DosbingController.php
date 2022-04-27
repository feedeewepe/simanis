<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GroupstatusModel;
use App\Models\InternshipGroupModel;
use App\Models\LecturerModel;

class DosbingController extends BaseController
{
	protected $internshipGroupModel;
	protected $studentModel;
	protected $companyModel;
	protected $groupStatusModel;

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
	
	public function bimbingan()
	{
		if ($this->pembimbing) {
			$this->internshipGroupModel = model(InternshipGroupModel::class);
			$this->lectureModel = model(LecturerModel::class);

			$idDosen = $this->lectureModel->like("EMPLOYEEID", user()->nim_nip)->select('LECTURERCODE')->find()[0]['LECTURERCODE'];
			$studentData = $this->internshipGroupModel->join("student", "student.GROUPID=internshipgroup.GROUPID")->join("company", "internshipgroup.COMPANYID=company.COMPANYID")->join("groupstatus", "groupstatus.GROUPID=internshipgroup.GROUPID")->getWhere(['internshipgroup.LECTURERCODE' => $idDosen, 'STATUSID' => 2])->getResult();
			$studentAccepted = $this->internshipGroupModel->join("student", "student.GROUPID=internshipgroup.GROUPID")->join("company", "internshipgroup.COMPANYID=company.COMPANYID")->join("groupstatus", "groupstatus.GROUPID=internshipgroup.GROUPID")->getWhere(['internshipgroup.LECTURERCODE' => $idDosen, 'STATUSID' => 3])->getResult();

			$data = [
				'title' => 'Kerja Praktek - Data Mahasiswa Bimbingan',
				'menu' => $this->menu,
				'usergroup' => $this->userGroup,
				'role' => $this->role,
				'roleid' => $this->roleid,
				'studentData' => $studentData,
				'studentAccepted' => $studentAccepted,
			];
			return view('dosbing/dosbingDosenView', $data);
		}
	}
	
	public function approval() {
		if ($this->pembimbing) {
			$allowedPostFields = [
				'groupid', 'acc', 'reject'
			];
			$post = $this->request->getPost($allowedPostFields);

			$groupid = $post['groupid'];
			$this->internshipGroupModel = model(InternshipGroupModel::class);
			$this->groupStatusModel = model(GroupstatusModel::class);
			
			// Acc atau Reject Student
			if (isset($post['acc'])) {
				$acc_data = [
					'STATUSID' => 3
				];
				$this->groupStatusModel->whereIn('GROUPID', [$groupid])->set($acc_data)->update();

				return redirect()->back()->withInput()->with('success', 'Telah di Acc');
			} else if (isset($post['reject'])) {
				$reject_data = [
					'LECTURERCODE' => NULL
				];
				$this->internshipGroupModel->update($groupid, $reject_data);
				return redirect()->back()->withInput()->with('errors', ['Telah di reject']);
			}
		}
	}

}
