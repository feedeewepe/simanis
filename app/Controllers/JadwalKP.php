<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Student;
use App\Models\CompanyModel;
use App\Models\FakultasModel;
use App\Models\InternshipGroupModel;
use App\Models\RoleModel;
use App\Models\StudentModel;

class JadwalKP extends BaseController
{
	protected $internshipGroup;
	protected $company;
	protected $student;
	protected $fakultas;

	public function __construct()
	{
		$this->internshipGroup = model(InternshipGroupModel::class);
		$this->fakultas = model(FakultasModel::class);
	}

	public function index()
	{
		//
	}

	public function review() 
	{
		$dataJadwal = $this->internshipGroup->join("student", "student.GROUPID=internshipgroup.GROUPID")->join("studyprogram", "studyprogram.STUDYPROGRAMID = student.STUDYPROGRAMID")->join("faculties", "studyprogram.FACULTYID=faculties.FACULTYID")->get()->getResult();
		$dataJadwalGroup = $this->internshipGroup->join("company", "company.COMPANYID=internshipgroup.COMPANYID");
		
		$data = [
			'title' => 'Review Jadwal Kerja Praktek',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'role' => $this->role,
			'roleid' => $this->roleid,
			'fakultas' => $this->fakultas->get_all_data(),
			'dataJadwal' => $dataJadwal,
			'dataJadwalGroup' => $dataJadwalGroup->paginate(5, 'group'),
			'pager' => $dataJadwalGroup->pager
		];

		return view('fakultas/jadwal_kp', $data);
	}
}
