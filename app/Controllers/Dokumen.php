<?php

namespace App\Controllers;

use App\Models\dokumenModel;

class Dokumen extends BaseController
{
	protected $dokumenModel;

	/*
	Tujuan    : Menampilkan view pengajuan surat permohonan KP
	Parameter : 
	Output    : View 'kerjapraktek/form_permohonan_kp'
	*/
	public function permohonanKP()
	{
		$fakultas = model(FakultasModel::class);

		$data = [
			'title' => 'Kerja Praktek - Surat Permohonan',
			'menu' => $this->menu,
			'usergroup' => $this->userGroup,
			'fakultas' => $fakultas->get_all_data(),
		];
		return view('kerjapraktek/form_permohonan_kp', $data);
	}

	/*
	Tujuan    : Memasukkan data yang ke database
	Parameter : 
	Output    : Tampilan redirect dengan penyimpanan sukses atau gagal
	Belum Selesai
	*/
	public function kirimPermohonanKP()
	{
		$rules = [
			// 'nimketua' => 'required',
			// 'namaketua' => 'required',
			// 'tlpketua' => 'required',
			// 'emailketua' => 'required|valid_email',
			// 'fakultas' => 'required',
			// 'prodi' => 'required',
			'idinstansi' => 'required',
			'namainstansi' => 'required',
			'alamatinstansi' => 'required',
			'tlpinstansi' => 'required',
		];
		// if ($id) {
		// 	$this->studentModel->update($var['nimketua'], ['GROUPID' => $id]);
		// 	if (isset($var['nimanggota1'])) {
		// 		$this->studentModel->update($var['nimanggota1'], ['GROUPID' => $id]);
		// 	}
		// 	if (isset($var['nimanggota2'])) {
		// 		$this->studentModel->update($var['nimanggota2'], ['GROUPID' => $id]);
		// 	}

		// 	return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
		// } else {
		// 	return redirect()->back()->withInput()->with('errors', $this->internshipGroupModel->errors());
		// }
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
    
            $save = $db->insert($data);
            print_r('File has successfully uploaded');        
        }
	}

	

	

