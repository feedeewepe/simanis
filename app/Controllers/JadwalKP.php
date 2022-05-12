<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Database\BaseBuilder;
use App\Entities\Student;
use App\Models\CompanyModel;
use App\Models\ExamScheduleModel;
use App\Models\FakultasModel;
use App\Models\InternshipGroupModel;
use App\Models\RoleModel;
use App\Models\StudentExamModel;
use App\Models\StudentModel;

class JadwalKP extends BaseController
{
	protected $internshipGroup;
	protected $fakultas;
	protected $studentExamModel;
	protected $examScheduleModel;

	public function __construct()
	{
		$this->internshipGroup = model(InternshipGroupModel::class);
		$this->fakultas = model(FakultasModel::class);
		$this->studentExamModel = model(StudentExamModel::class);
		$this->examScheduleModel = model(ExamScheduleModel::class);
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

	public function listUjianKp()
	{
		$dataUpkp = $this->internshipGroup->join("student", "student.GROUPID=internshipgroup.GROUPID")->join("studyprogram", "studyprogram.STUDYPROGRAMID = student.STUDYPROGRAMID")->join("faculties", "studyprogram.FACULTYID=faculties.FACULTYID")->get()->getResult();

		$dataGroup = $this->internshipGroup->join("company", "company.COMPANYID=internshipgroup.COMPANYID")->join('lecturer', 'lecturer.LECTURERCODE=internshipgroup.LECTURERCODE')->whereNotIn('groupid', function (BaseBuilder $builder) {
			return $builder->select('groupid')->from('studentexam');
		})->orderBy('internshipgroup.GROUPID', 'ASC')->paginate(5, 'group-1');

		$dataUpkpGroup = $this->internshipGroup->join("studentexam", "studentexam.GROUPID=internshipgroup.GROUPID")->join("examschedule", "studentexam.SCHEDULEID=examschedule.SCHEDULEID")->paginate(5, 'group-2');
		$pager = \Config\Services::pager();

		$data = [
			'title' => 'Review Jadwal Kerja Praktek',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'role' => $this->role,
			'roleid' => $this->roleid,
			'fakultas' => $this->fakultas->get_all_data(),
			'dataUpkp' => $dataUpkp,
			'dataGroup' => $dataGroup,
			'dataUpkpGroup' => $dataUpkpGroup,
			'pager' => $pager
		];
		
		return view('fakultas/jadwal_upkp', $data);
	}

	public function formUjianKp($groupid)
	{
		$intGroup = $this->internshipGroup;
		
		$studentData = $intGroup->join("student", "student.GROUPID=internshipgroup.GROUPID")->join("company", "internshipgroup.COMPANYID=company.COMPANYID")->join("studyprogram", "studyprogram.STUDYPROGRAMID=student.STUDYPROGRAMID")->join("faculties", "faculties.FACULTYID=studyprogram.FACULTYID")->getWhere(['internshipgroup.GROUPID' => $groupid])->getResult();

		$dataMhs = array_merge(
			array_filter($studentData, function ($var) use ($intGroup, $groupid) {
				return ($var->STUDENTID == $intGroup->getWhere(['GROUPID' => $groupid])->getRow()->LEADER_NIM);
			}),
			array_filter($studentData, function ($var) use ($intGroup, $groupid) {
				return ($var->STUDENTID != $intGroup->getWhere(['GROUPID' => $groupid])->getRow()->LEADER_NIM);
			})
		);

		$data = [
			'title' => 'Review Jadwal Kerja Praktek',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'role' => $this->role,
			'roleid' => $this->roleid,
			'fakultas' => $this->fakultas->get_all_data(),
			'dataMhs' => $dataMhs
		];
		return view('fakultas/form_jadwal_upkp', $data);
	}

	public function setTanggalKp() {
		$rules = [
			'groupid' => 'required',
			'tanggal-upkp' => 'required',
			'start-time' => 'required',
			'end-time' => 'required',
		];
		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} else {
			$allowedPostFields = [
				'groupid', 'prodi', 'tanggal-upkp', 'start-time', 'end-time'
			];
			$posted = $this->request->getPost($allowedPostFields);
			$intGroupData = $this->internshipGroup->getWhere(['GROUPID' => $posted['groupid']])->getRow();
			
			$examScheduleId = $this->examScheduleModel->orderBy('SCHEDULEID', 'desc')->first() != null ? 1 + (int) $this->examScheduleModel->orderBy('SCHEDULEID', 'desc')->first()['SCHEDULEID'] : 1;
			$dataSchedule = [
				'STUDYPROGRAMID' => $posted['prodi'],
				'SCHEDULEID' => $examScheduleId,
				'DAY' => date('l', strtotime($posted['tanggal-upkp'])),
				'DATE' => $posted['tanggal-upkp'],
				'STARTTIME' => $posted['start-time'],
				'ENDTIME' => $posted['end-time']
			];

			$studentExamId = $this->studentExamModel->orderBy('STUDENTEXAMID', 'desc')->first() != null ? 1 + (int) $this->studentExamModel->orderBy('STUDENTEXAMID', 'desc')->first()['STUDENTEXAMID'] : 1;
			$dataExam = [
				'STUDENTEXAMID' => $studentExamId,
				'GROUPID' => $posted['groupid'],
				'SCHEDULEID' => $examScheduleId,
				'LECTURERCODE' => $intGroupData->LECTURERCODE,
			];

			$this->examScheduleModel->insert($dataSchedule);
			$this->studentExamModel->insert($dataExam);

			return redirect()->to(base_url('JadwalKP/listUjianKp'))->with('success', 'data telah tersimpan');
		}
	}
}