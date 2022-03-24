<?php

namespace App\Controllers;

class Dokumen extends BaseController
{

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
}
