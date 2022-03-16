<?php

namespace App\Controllers;

class KerjaPraktek extends BaseController
{
    protected $studentModel;

    public function index()
    {
    }

    public function daftarKP()
    {
        $fakultas = model(FakultasModel::class);

        $data = [
            'title' => 'Kerja Praktek - Daftar',
            'menu' => $this->menu,
            'usergroup' => $this->userGroup,
            'fakultas' => $fakultas->get_all_data(),
        ];

        return view('kerjapraktek/daftar', $data);
    }

    public function prodiFakultas()
    {
        $prodi = model(ProdiModel::class);
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('fakultasid');
            echo json_encode($prodi->get_prodi_fakultas($id));
        } else {
            exit('404 Not Found');
        }
    }

    public function daftar()
    {
        $rules = [
            'nimketua' => 'required',
            'namaketua' => 'required',
            'tlpketua' => 'required',
            'emailketua' => 'required|valid_email',
            'fakultas' => 'required',
            'prodi' => 'required',
            'namainstansi' => 'required',
            'alamatinstansi' => 'required',
            'tlpinstansi' => 'required',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $allowedPostFields = [
            'nimketua', 'namaketua', 'tlpketua', 'emailketua',
            'nimanggota1', 'namaanggota1', 'tlpanggota1', 'emailanggota1',
            'nimanggota2', 'namaanggota2', 'tlpanggota2', 'emailanggota2',
            'fakultas', 'prodi', 'namainstansi', 'alamatinstansi', 'tlpinstansi', ];
        $var = $this->request->getPost($allowedPostFields);
        // var_dump($var);
        // die;
        if (!$var->save($var)) {
            return redirect()->back()->withInput()->with('errors', $users->errors());
        }
    }

    public function pengantarSurvey()
    {
        $data = [
            'title' => 'Kerja Praktek - Pengantar Survey',
            'menu' => $this->menu,
            'usergroup' => $this->userGroup,
        ];

        return view('kerjapraktek/pengantar_survey', $data);
    }

    public function getmhs()
    {
        $nim = $this->request->getVar('nim');
        $this->studentModel = model(StudentModel::class);
        $this->studentModel->like('STUDENTID', '%'.$nim.'%');
        $this->studentModel->select('STUDENTID,FULLNAME,STUDYPROGRAMID');
        $res = $this->studentModel->findAll(5);
        // var_dump($res);
        header_remove();
        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($res);
        exit();
    }

    public function getcompany()
    {
        $namacompany = $this->request->getVar('namacompany');
        $this->studentModel = model(CompanyModel::class);
        $this->studentModel->like('COMPANYNAME', '%'.$namacompany.'%');
        $this->studentModel->select('COMPANYID,COMPANYNAME,ADDRESS,CITY,PROVINCE,PHONE,EMAIL');
        $res = $this->studentModel->findAll(5);
        // var_dump($res);
        header_remove();
        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($res);
        exit();
    }
}
