<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InternshipGroupModel;
use Myth\Auth\Models\UserModel;
use App\Models\RoleModel;
use App\Models\StudentExamModel;
use App\Models\StudentModel;

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
		$studentModel = model(StudentModel::class);
		$intGroup = model(InternshipGroupModel::class);
		$company = model(CompanyModel::class);
		$studentExam = model(StudentExamModel::class);

		$kelompokMhs = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->GROUPID;
		if ($kelompokMhs != 0) {
			$dataKelompok = $intGroup->join('student', 'student.GROUPID=internshipgroup.GROUPID')->getWhere(['internshipgroup.GROUPID' => $kelompokMhs])->getResult();
			$companyName = $company->join('internshipgroup', 'company.COMPANYID = internshipgroup.COMPANYID')->join('student', ' internshipgroup.GROUPID = student.GROUPID')->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->COMPANYNAME;

			$sortedData = array_merge(array_filter($dataKelompok, function ($var) use ($intGroup, $kelompokMhs) {
				return ($var->STUDENTID == $intGroup->getWhere(['GROUPID' => $kelompokMhs])->getRow()->LEADER_NIM);
			}), array_filter($dataKelompok, function ($var) use ($intGroup, $kelompokMhs) {
				return ($var->STUDENTID != $intGroup->getWhere(['GROUPID' => $kelompokMhs])->getRow()->LEADER_NIM);
			}));
			$pptInfo = $studentExam->join('examschedule', 'studentexam.SCHEDULEID = examschedule.SCHEDULEID')->join('lecturer', 'studentexam.LECTURERCODE=lecturer.LECTURERCODE')->getWhere(['GROUPID' => $kelompokMhs])->getRow();
			$tanggalPpt = $pptInfo->DAY . ", " . $pptInfo->DATE . " " . $pptInfo->STARTTIME;
			$statusPpt = "Revisi";
			$nilaiKp = $pptInfo->TOTALSCORE;
		} else {
			$sortedData = null;
			$companyName = null;
			$tanggalPpt = null;
			$nilaiKp = null;
			$statusPpt = "Pending";
		}

		$data = [
			'title' => 'Kerja Praktek - Surat Permohonan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'roles' => $this->roles->where('roleid >', 1)->findAll(),
			'role' => $this->role,
			'roleid' => $this->roleid,
			'dataMhs' => $sortedData,
			'lokasiKp' => $companyName,
			'tanggalPpt' => $tanggalPpt,
			'nilaiKp' => $nilaiKp,
			'status' => $statusPpt
		];
		return view('presentasi/presentasi_kp', $data);
	}
}
