<?php

namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\DokumenModel;
use App\Models\InternshipGroupModel;
use CodeIgniter\I18n\Time;
use App\Models\RoleModel;
use App\Models\StudyProgramModel;
use Myth\Auth\Config\Auth as AuthConfig;
use Myth\Auth\Models\UserModel;

class Dokumen extends BaseController
{
	protected $dokumenModel;
	protected $internshipGroupModel;
	protected $roles;

	public function __construct()
	{
		$this->userModel = new UserModel();
		$this->roles = new RoleModel();
		helper('form');
		$this->session = service('session');

		$this->config = config('Auth');
		$this->auth = service('authentication');
	}

	/*
	Tujuan    : Menampilkan view pengajuan surat permohonan KP
	Parameter : 
	Output    : View 'kerjapraktek/form_permohonan_kp'
	*/
	public function permohonanKP()
	{
		$fakultas = model(FakultasModel::class);
		$intGroup = model(InternshipGroupModel::class);
		$studentModel = model(StudentModel::class);
		$prodiModel = model(StudyProgramModel::class);

		$kelompokMhs = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->GROUPID;
		if ($kelompokMhs != 0) {
			$nimKetua = $intGroup->getWhere(['GROUPID' => $kelompokMhs])->getRow()->LEADER_NIM;

			$dataKelompok = $intGroup->join('student', 'student.GROUPID=internshipgroup.GROUPID')->getWhere(['internshipgroup.GROUPID' => $kelompokMhs])->getResult();
			$ketua = $intGroup->join('STUDENT', 'STUDENTID=LEADER_NIM')->getWhere(['LEADER_NIM' => $nimKetua])->getRow();

			$kodeProdi = explode('-', $dataKelompok[0]->CLASS)[0];
			$prodi = $prodiModel->join('faculties', 'studyprogram.FACULTYID=faculties.FACULTYID')->getWhere(['studyprogram.ACRONIM' => $kodeProdi])->getRow();
		} else {
			$ketua = null;
			$dataKelompok = null;
			$prodi = (object) [
				"STUDYPROGRAMNAME" => null,
				"FACULTYNAME" => null,
			];
		}

		$data = [
			'title' => 'Kerja Praktek - Surat Permohonan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'fakultas' => $fakultas->get_all_data(),
			'roles' => $this->roles->where('roleid >', 1)->findAll(),
			'role' => $this->role,
			'roleid' => $this->roleid,
			'ketua' => $ketua,
			'data' => $dataKelompok,
			'namaProdi' => $prodi->STUDYPROGRAMNAME,
			'namaFakultas' => $prodi->FACULTYNAME
		];
		return view('dokumen/form_permohonan_kp', $data);
	}

	/*
	Tujuan    : Memasukkan data yang ke database
	Parameter : 
	Output    : Tampilan redirect dengan penyimpanan sukses atau gagal
	Bisa upload file ke folder writable, Insert ke Table document, dan ke internshipgroup
	Data id dan inputby masih static
	*/
	public function kirimPermohonanKP()
	{
		helper(['form', 'url']);
		$rules = [
			'mulaikp' => 'required',
			'akhirkp' => 'required',
			'ksm' => 'uploaded[ksm]|ext_in[ksm,png,jpg,jpeg,pdf]|max_size[ksm,50000]',
			'ktm' => 'uploaded[ktm]|ext_in[ktm,png,jpg,jpeg,pdf]|max_size[ktm,50000]',
			'transkrip' => 'uploaded[transkrip]|ext_in[transkrip,png,jpg,jpeg,pdf]|max_size[transkrip,50000]',
			'cv' => 'uploaded[cv]|ext_in[cv,png,jpg,jpeg,pdf]|max_size[cv,50000]',
			'survey' => 'uploaded[survey]|ext_in[survey,png,jpg,jpeg,pdf]|max_size[survey,50000]',
			'proposal' => 'uploaded[proposal]|ext_in[proposal,png,jpg,jpeg,pdf]|max_size[proposal,50000]',
		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} else {
			$allowedPostFields = [
				'mulaikp', 'akhirkp'
			];
			$var = $this->request->getPost($allowedPostFields);

			$dokumen = model(DokumenModel::class);
			$intGroup = model(InternshipGroupModel::class);
			$studentModel = model(StudentModel::class);

			$docid = $dokumen->orderBy('DOCUMENTID', 'desc')->first() != null ? 1 + (int) $dokumen->orderBy('DOCUMENTID', 'desc')->first()['DOCUMENTID'] : 1;
			$kelompokMhs = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->GROUPID;
			$name = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->FULLNAME;

			// Getting file and move file to writable folder
			$ksm = $this->request->getFile('ksm');
			$ktm = $this->request->getFile('ktm');
			$transkrip = $this->request->getFile('transkrip');
			$cv = $this->request->getFile('cv');
			$survey = $this->request->getFile('survey');
			$proposal = $this->request->getFile('proposal');

			$ksmName = 'ksm.' . $ksm->getClientExtension();
			$ktmName = 'ktm.' . $ktm->getClientExtension();
			$transkripName = 'transkrip.' . $transkrip->getClientExtension();
			$cvName = 'cv.' . $cv->getClientExtension();
			$surveyName = 'survey.' . $survey->getClientExtension();
			$proposalName = 'proposal.' . $survey->getClientExtension();

			$ksm->move('documents/uploads/permohonanKP/' . $kelompokMhs. '/');
			$ktm->move('documents/uploads/permohonanKP/' . $kelompokMhs . '/');
			$transkrip->move('documents/uploads/permohonanKP/' . $kelompokMhs . '/');
			$cv->move('documents/uploads/permohonanKP/' . $kelompokMhs . '/');
			$survey->move('documents/uploads/permohonanKP/' . $kelompokMhs. '/');
			$proposal->move('documents/uploads/permohonanKP/' . $kelompokMhs . '/');

			$ksmUpload = [
				'DOCUMENTID' => $docid,
				'GROUPID' => $kelompokMhs,
				'DOCUMENT' =>  $ksmName,
				'DOCUMENTURL'  => 'documents/uploads/permohonanKP/' . $kelompokMhs . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$ktmUpload = [
				'DOCUMENTID' => $docid + 1,
				'GROUPID' => $kelompokMhs,
				'DOCUMENT' =>  $ktmName,
				'DOCUMENTURL'  => 'documents/uploads/permohonanKP/' . $kelompokMhs . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$transkripUpload = [
				'DOCUMENTID' => $docid + 2,
				'GROUPID' => $kelompokMhs,
				'DOCUMENT' =>  $transkripName,
				'DOCUMENTURL'  => 'documents/uploads/permohonanKP/' . $kelompokMhs . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$cvUpload = [
				'DOCUMENTID' => $docid + 3,
				'GROUPID' => $kelompokMhs,
				'DOCUMENT' =>  $cvName,
				'DOCUMENTURL'  => 'documents/uploads/permohonanKP/' . $kelompokMhs . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$surveyUpload = [
				'DOCUMENTID' => $docid + 4,
				'GROUPID' => $kelompokMhs,
				'DOCUMENT' =>  $surveyName,
				'DOCUMENTURL'  => 'documents/uploads/permohonanKP/' . $kelompokMhs . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$proposalUpload = [
				'DOCUMENTID' => $docid + 5,
				'GROUPID' => $kelompokMhs,
				'DOCUMENT' =>  $proposalName,
				'DOCUMENTURL'  => 'documents/uploads/permohonanKP/' . $kelompokMhs . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$date = [
				'STARTDATE' => $var['mulaikp'],
				'ENDDATE' => $var['akhirkp']
			];

			// Save file to document and update date in internshipgroup
			$dokumen->insertBatch([$ksmUpload, $ktmUpload, $transkripUpload, $cvUpload, $surveyUpload, $proposalUpload]);
			$intGroup->update($kelompokMhs, $date);
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		}
	}

	/*
	Tujuan    : Menampilkan view pakta integritas
	Parameter : 
	Output    : View 'PaktaIntegritas'
	*/
	public function pakta_integritas()
	{
		$intGroup = model(InternshipGroupModel::class);
		$company = model(CompanyModel::class);
		$studentModel = model(StudentModel::class);
		$prodiModel = model(StudyProgramModel::class);

		$mahasiswa = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow();
		$kodeProdi = explode('-', $mahasiswa->CLASS)[0];
		$prodi = $prodiModel->join('faculties', 'studyprogram.FACULTYID=faculties.FACULTYID')->getWhere(['studyprogram.ACRONIM' => $kodeProdi])->getRow();
		if ($mahasiswa->GROUPID != 0) {
			$companyName = $company->join('internshipgroup', ' company.COMPANYID = internshipgroup.COMPANYID')->join('student', ' internshipgroup.GROUPID = student.GROUPID')->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->COMPANYNAME;
		} else {
			$companyName = null;
		}

		$data = [
			'role' => $this->role,
			'roleid' => $this->roleid,
			'title' => 'Kerja Praktek - Pakta Integritas',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'nama' => $mahasiswa->FULLNAME,
			'nim' => user()->nim_nip,
			'telp' => $mahasiswa->STUDENT_PHONE,
			'prodi' => $prodi->STUDYPROGRAMNAME,
			'lokasi' => $companyName
		];
		return view('dokumen/pakta_integritas', $data);
	}

	public function balasanKP()
	{
		$fakultas = model(FakultasModel::class);

		$data = [
			'title' => 'Kerja Praktek - Surat Balasan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'fakultas' => $fakultas->get_all_data(),
			'roles' => $this->roles->where('roleid >', 1)->findAll(),
			'role' => $this->role,
			'roleid' => $this->roleid,
		];
		return view('dokumen/upload_balasan_kp', $data);
	}

	public function upload_balasanKP()
	{

		helper(['form', 'url']);
		$rules = [
			'suratbalasan' => 'uploaded[suratbalasan]|ext_in[suratbalasan,png,jpg,jpeg,pdf]|max_size[suratbalasan,500000]'

		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} else {
			$studentModel = model(StudentModel::class);
			$this->dokumenModel = model(DokumenModel::class);
	
			$groupid = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->GROUPID;
			$name = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->FULLNAME;
			$docid = $this->dokumenModel->orderBy('DOCUMENTID', 'desc')->first() != null ? 1 + (int) $this->dokumenModel->orderBy('DOCUMENTID', 'desc')->first()['DOCUMENTID'] : 1;

			$balasan = $this->request->getFile('suratbalasan');
			$balasanName = 'balasanKP.' . $balasan->getClientExtension();
			$balasan->move('documents/uploads/balasanKP/' . $groupid . '/', $balasanName);

			$balasanUpload = [
				'DOCUMENTID' => $docid,
				'GROUPID' => $groupid,
				'DOCUMENT' =>  $balasanName,
				'DOCUMENTURL'  => 'documents/uploads/balasanKP/' . $groupid . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$this->dokumenModel->insert($balasanUpload);
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		}

		// helper(['form', 'url']);

		//     $img = $this->request->getFile('suratbalasan');
		//     $img->move(WRITEPATH . 'documents/uploads');

		//     $data = [
		//        'name' =>  $img->getName(),
		//        'type'  => $img->getClientMimeType()
		//     ];

		//     $save = $db->insert($data);
		//     print_r('File has successfully uploaded');        

	}

	public function laporanKP()
	{
		$fakultas = model(FakultasModel::class);

		$data = [
			'title' => 'Kerja Praktek - Surat Laporan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'fakultas' => $fakultas->get_all_data(),
			'roles' => $this->roles->where('roleid >', 1)->findAll(),
			'role' => $this->role,
			'roleid' => $this->roleid,
		];
		return view('dokumen/upload_laporan_kp', $data);
	}

	public function upload_laporanKP()
	{

		helper(['form', 'url']);
		$rules = [
			'suratlaporan' => 'uploaded[suratlaporan]|ext_in[suratlaporan,png,jpg,jpeg,pdf]|max_size[suratlaporan,500000]'

		];


		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} else {
			$id = 1;
			$name = 'UNTO';
			$this->dokumenModel = model(DokumenModel::class);

			$laporan = $this->request->getFile('suratlaporan');
			$laporan->move(WRITEPATH . 'documents/uploads/laporanKP/' . $id . '/');

			$laporanUpload = [
				'DOCUMENTID' => 1,
				'GROUPID' => $id,
				'DOCUMENT' =>  $laporan->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents/uploads/laporanKP/' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$this->dokumenModel->insert($laporanUpload);
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		}
	}

	public function pengumpulanDokumen()
	{
		$fakultas = model(FakultasModel::class);

		$data = [
			'title' => 'Kerja Praktek - pengumpulan Dokumen',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'fakultas' => $fakultas->get_all_data(),
			'roles' => $this->roles->where('roleid >', 1)->findAll(),
			'role' => $this->role,
			'roleid' => $this->roleid,
		];
		return view('dokumen/upload_pengumpulan_dokumen', $data);
	}

	public function upload_pengumpulan_dokumen()
	{

		helper(['form', 'url']);
		$rules = [
			'pengumpulandokumen' => 'uploaded[pengumpulandokumen]|ext_in[pengumpulandokumen,png,jpg,jpeg,pdf]|max_size[pengumpulandokumen,500000]'

		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} else {
			$id = 1;
			$name = 'UNTO';
			$this->dokumenModel = model(DokumenModel::class);

			$balasan = $this->request->getFile('pengumpulandokumen');
			$balasan->move(WRITEPATH . 'documents/uploads/pengumpulanDokumen/' . $id . '/');

			$balasanUpload = [
				'DOCUMENTID' => 88,
				'GROUPID' => $id,
				'DOCUMENT' =>  $balasan->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents/uploads/pengumpulan_dokumen/' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$this->dokumenModel->insert($balasanUpload);
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		}
	}

	public function upload_pakta()
	{
		helper(['form', 'url']);
		$rules = [
			'paktaintegritas' => 'uploaded[paktaintegritas]|ext_in[paktaintegritas,png,jpg,jpeg,pdf]|max_size[paktaintegritas,50000]'
		];
		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} else {
			$this->dokumenModel = model(DokumenModel::class);
			$studentModel = model(StudentModel::class);

			$kelompokMhs = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->GROUPID;
			$name = $studentModel->getWhere(['STUDENTID' => user()->nim_nip])->getRow()->FULLNAME;
			$docid = $this->dokumenModel->orderBy('DOCUMENTID', 'desc')->first() != null ? 1 + (int) $this->dokumenModel->orderBy('DOCUMENTID', 'desc')->first()['DOCUMENTID'] : 1;
			$pakta = $this->request->getFile('paktaintegritas');
			$paktaName = 'pakta.' . $pakta->getClientExtension();
			$pakta->move('documents/uploads/paktaintegritas/' . $kelompokMhs . '/', $paktaName);

			$paktaUpload = [
				'DOCUMENTID' => $docid,
				'GROUPID' => $kelompokMhs,
				'DOCUMENT' =>  $paktaName,
				'DOCUMENTURL'  => 'documents/uploads/paktaintegritas/' . $kelompokMhs . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$this->dokumenModel->insert($paktaUpload);
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		}
	}

	public function upload_revisi()
	{
		$fakultas = model(FakultasModel::class);

		$data = [
			'title' => 'Kerja Praktek - Surat Balasan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'fakultas' => $fakultas->get_all_data(),
			'roles' => $this->roles->where('roleid >', 1)->findAll(),
			'role' => $this->role,
			'roleid' => $this->roleid,
		];
		return view('dokumen/upload_revisi', $data);
	}

	public function file_revisi()
	{
		helper(['form', 'url']);
		$rules = [
			'revisilaporan' => 'uploaded[revisilaporan]|ext_in[revisilaporan,pdf]|max_size[revisilaporan,500000]'

		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} else {
			$this->dokumenModel = model(DokumenModel::class);

			// $id = 1 + (int) $this->dokumenModel->getInsertID()[0]["DOCUMENTID"];
			$id = 1 + (int) $this->dokumenModel->orderBy('DOCUMENTID', 'desc')->first()["DOCUMENTID"];
			$name = 'SugarBabyHyeKyo';

			$balasan = $this->request->getFile('revisilaporan');
			$balasan->move(WRITEPATH . 'documents\uploads\revisi' . $id . '/');

			$balasanUpload = [
				'DOCUMENTID' => $id,
				'GROUPID' => $id,
				'DOCUMENT' =>  $balasan->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents\uploads\revisi' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$this->dokumenModel->insert($balasanUpload);
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		}
	}
}
