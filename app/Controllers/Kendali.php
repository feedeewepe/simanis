<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class Kendali extends BaseController
{

    public function formKendali() {
        $data = [
			'role' => $this->role,
            'roleid' => $this->roleid,
			'title' => 'Kerja Praktek - Pakta Integritas',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'nama' => 'William Kurniawan',
			'nim' => '1201190010',
			'telp' => '+6281234567890',
			'prodi' => 'Rekayasa Perangkat Lunak',
			'lokasi' => 'PT. Mandiri Tbk'
		];
		return view('monitoring/formulir_kendali_kp', $data);
    }

	public function submitkendali()
    {
        helper(['form', 'url']);
		$rules = [
			'nimmhs' => 'required',
			'unitkerja' => 'required',
            'kegiatan' => 'required',
		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} else {
			$allowedPostFields = [
				'nimmhs', 'unitkerja','kegiatan'
			];

			// Static Id and Name for GROUPID and INPUTBY
			$id = 1;
			$name = "UNTO";

			$var = $this->request->getPost($allowedPostFields);
			$this->dokumenModel = model(DokumenModel::class);
			$this->KendaliModel = model(KendaliModel::class);
			

			$data = [
                'idinternshipactivity' => "2",
				'STUDENTID' => $var['nimmhs'],
				'activity' => $var['kegiatan'],
                'activityunit' => $var['unitkerja'],
                'activitydate' => Time::now('Asia/Jakarta', 'en_US'),
                'activitystatus' => 0
			];

			// Save file to document and update date in internshipgroup
			$this->KendaliModel->insert($data);
			return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		}
	
		// $fakultas = model(FakultasModel::class);

        // $data = [
        //     'title' => 'Kerja Praktek - test',
        //     'menu' => $this->menu,
        //     'usergroup' => $this->userGroup,
        //     'fakultas' => $fakultas->get_all_data(),
        //     'role' => $this->role,
        //     'roleid' => $this->roleid,
        // ];

        // return view('monitoring/formulir_kendali_kp', $data);
        // $namacompany = $this->request->getVar('namacompany');
        // $this->studentModel = model(CompanyModel::class);
        // $this->studentModel->like('COMPANYNAME', '%' . $namacompany . '%');
        // $this->studentModel->select('COMPANYID,COMPANYNAME,ADDRESS,CITY,PROVINCE,PHONE,EMAIL');
        // $res = $this->studentModel->findAll(5);
        // // var_dump($res);
        // header_remove();
        // header('Content-Type: application/json');
        // http_response_code(200);
        // echo json_encode($res);
        // exit();
    }

	
}
