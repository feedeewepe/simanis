<?php

namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\GroupstatusModel;
use App\Models\InternshipGroupModel;
use App\Models\StudentModel;
use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class KerjaPraktek extends BaseController
{
    protected $studentModel;
    protected $internshipGroupModel;
    // protected $studentModel;
    protected $companyModel;

    public function index()
    {
    }

    public function daftarKP()
    {
        $fakultas = model(FakultasModel::class);
        $intGroup = model(InternshipGroupModel::class);
        $student = model(StudentModel::class);

        $data = [
            'title' => 'Kerja Praktek - Daftar',
            'menu' => $this->menu,
            'usergroup' => $this->userGroup,
            'fakultas' => $fakultas->get_all_data(),
            'role' => $this->role,
            'roleid' => $this->roleid,
        ];

        $data['intGroup'] = $intGroup->join('STUDENT', 'STUDENT.GROUPID=internshipgroup.GROUPID')->getWhere(['STUDENTID' => user()->nim_nip])->getRow();
        if ($data['intGroup'] != null) {
            $data['ketua'] = $student->getWhere(['STUDENTID' => $data['intGroup']->LEADER_NIM])->getRow();
            $data['anggota'] = $student->getWhere(['GROUPID' => $data['intGroup']->GROUPID, 'STUDENTID <>' => $data['intGroup']->LEADER_NIM])->getResultObject();
        }
        // echo $intGroup->getLastQuery();
        // die;

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
        helper(['form', 'url']);
        $rules = [
            'nimketua' => 'required',
            'namaketua' => 'required',
            'tlpketua' => 'required',
            'emailketua' => 'required|valid_email',
            // 'fakultas' => 'required',
            // 'prodi' => 'required',
            'idinstansi' => 'required',
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
            'fakultas', 'prodi', 'idinstansi', 'namainstansi', 'alamatinstansi', 'tlpinstansi',
        ];

        $var = $this->request->getPost($allowedPostFields);
        $this->studentModel = model(StudentModel::class);
        $this->internshipGroupModel = model(InternshipGroupModel::class);
        $this->groupstatusModel = model(GroupstatusModel::class);

        $id = $this->internshipGroupModel->orderBy('GROUPID', 'desc')->first() != null ? 1 + (int) $this->internshipGroupModel->orderBy('GROUPID', 'desc')->first()->GROUPID : 1;
        $this->internshipGroupModel->insert(['GROUPID' => $id, 'COMPANYID' => $var['idinstansi'], 'LEADER_NIM' => $var['nimketua']]);
        $myTime = Time::now('Asia/Jakarta', 'en_US');
        $this->groupstatusModel->insert(['STATUSID' => '1', 'GROUPID' => $id, 'INPUTDATE' => $myTime]);

        if ($id) {
            $this->studentModel->update($var['nimketua'], ['GROUPID' => $id]);
            if (isset($var['nimanggota1'])) {
                $this->studentModel->update($var['nimanggota1'], ['GROUPID' => $id], ['STUDENT_PHONE' => $var['tlpanggota1']], ['STUDENT_EMAIL' => $var['emailanggota1']]);
            }
            if (isset($var['nimanggota2'])) {
                $this->studentModel->update($var['nimanggota2'], ['GROUPID' => $id], ['STUDENT_PHONE' => $var['tlpanggota2']], ['STUDENT_EMAIL' => $var['emailanggota2']]);
            }

            return redirect()->back()->withInput()->with('success', 'data telah tersimpan');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->internshipGroupModel->errors());
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
        $this->studentModel->like('STUDENTID', '%' . $nim . '%');
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
        $this->studentModel->like('COMPANYNAME', '%' . $namacompany . '%');
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
