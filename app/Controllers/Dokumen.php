<?php

namespace App\Controllers;

use App\Models\DokumenModel;
use App\Models\InternshipGroupModel;
use CodeIgniter\I18n\Time;

class Dokumen extends BaseController
{
	protected $dokumenModel;
	protected $internshipGroupModel;

	/*
	Tujuan    : Menampilkan view pengajuan surat permohonan KP
	Parameter : 
	Output    : View 'kerjapraktek/form_permohonan_kp'
	*/
	public function permohonanKP()
	{
		$data = [
			'title' => 'Kerja Praktek - Surat Permohonan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup
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

			// Static Id and Name for GROUPID and INPUTBY
			$id = 1;
			$name = "William";
			
			// Getting file and move file to writable folder
			$ksm = $this->request->getFile('ksm');
			$ktm = $this->request->getFile('ktm');
			$transkrip = $this->request->getFile('transkrip');
			$cv = $this->request->getFile('cv');
			$survey = $this->request->getFile('survey');
			$proposal = $this->request->getFile('proposal');

			$ksm->move(WRITEPATH . 'documents/uploads/permohonanKP/'. $id .'/');
			$ktm->move(WRITEPATH . 'documents/uploads/permohonanKP/' . $id . '/');
			$transkrip->move(WRITEPATH .'documents/uploads/permohonanKP/' . $id . '/');
			$cv->move(WRITEPATH .'documents/uploads/permohonanKP/' . $id . '/');
			$survey->move(WRITEPATH .'documents/uploads/permohonanKP/' . $id . '/');
			$proposal->move(WRITEPATH .'documents/uploads/permohonanKP/' . $id . '/');

			$var = $this->request->getPost($allowedPostFields);
			$this->dokumenModel = model(DokumenModel::class);
			$this->internshipGroupModel = model(InternshipGroupModel::class);
			
			$ksmUpload = [
				'GROUPID' => $id,
				'DOCUMENT' =>  $ksm->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents/uploads/permohonanKP/' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$ktmUpload = [
				'GROUPID' => $id,
				'DOCUMENT' =>  $ktm->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents/uploads/permohonanKP/' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$transkripUpload = [
				'GROUPID' => $id,
				'DOCUMENT' =>  $transkrip->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents/uploads/permohonanKP/' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$cvUpload = [
				'GROUPID' => $id,
				'DOCUMENT' =>  $cv->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents/uploads/permohonanKP/' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$surveyUpload = [
				'GROUPID' => $id,
				'DOCUMENT' =>  $cv->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents/uploads/permohonanKP/' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$proposalUpload = [
				'GROUPID' => $id,
				'DOCUMENT' =>  $proposal->getName(),
				'DOCUMENTURL'  => WRITEPATH . 'documents/uploads/permohonanKP/' . $id . '/',
				'INPUTDATE' => Time::now('Asia/Jakarta', 'en_US'),
				'INPUTBY' => $name
			];

			$date = [
				'STARTDATE' => $var['mulaikp'],
				'ENDDATE' => $var['akhirkp']
			];

			// Save file to document and update date in internshipgroup
			$this->dokumenModel->insert($ksmUpload);
			$this->dokumenModel->insert($ktmUpload);
			$this->dokumenModel->insert($transkripUpload);
			$this->dokumenModel->insert($cvUpload);
			$this->dokumenModel->insert($proposalUpload);
			$this->internshipGroupModel->update($id, $date);
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		}
	}

	/*
	Tujuan    : Menampilkan view pengajuan surat permohonan KP
	Parameter : 
	Output    : View 'kerjapraktek/form_permohonan_kp'
	*/
	public function balasanKP()
	{
		$fakultas = model(FakultasModel::class);

		$data = [
			'title' => 'Kerja Praktek - Surat Balasan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'fakultas' => $fakultas->get_all_data(),
		];
		return view('dokumen/upload_balasan_kp', $data);
	}

	public function upload_balasanKP()
	{
		$rules = [
			'suratbalasan' => [
				//'required'
				'uploaded[file]',
				'mime_in[file,image/jpg,image/jpeg,image/png]',
				'max_size[file,100024]'

			]
		];
		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}
		$allowedPostFields = [
			'suratbalasan'
		];
		$var = $this->request->getPost($allowedPostFields);

		//$this->dokumenModel = model(dokumenModel::class);
		//$id = 1;
		// var_dump($id);
		// die;
		/*$this->dokumen->insert(['GROUPID' => $id]);
        if ($id) {
            $this->studentModel->update($var['suratbalasan'], ['GROUPID' => $id]);
            return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->internshipGroupModel->errors());
        }
		*/
		helper(['form', 'url']);

		$img = $this->request->getFile('suratbalasan');
		$img->move(WRITEPATH . 'documents/uploads');

		$data = [
			'name' =>  $img->getName(),
			'type'  => $img->getClientMimeType()
		];

		// $save = $db->insert($data);
		print_r('File has successfully uploaded');
	}
}
