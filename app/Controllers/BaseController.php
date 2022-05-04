<?php

namespace App\Controllers;

/*
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use App\Models\UserGroupModel;
use CodeIgniter\Config\Services;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Session\Session;
use Config\Database;

class BaseController extends Controller
{
    /**
     * @var \Myth\Auth\Authorization\FlatAuthorization
     */
    protected $authorize;

    /**
     * @var \Myth\Auth\Authentication\LocalAuthenticator
     */
    protected $auth;

    /**
     * @var \CodeIgniter\Database\BaseConnection|\CodeIgniter\Database\BaseBuilder
     */
    protected $db;

    /**
     * GetPost, GetVar dll.
     *
     * @var IncomingRequest;
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['auth', 'url', 'form', 'html', 'text'];

    protected $userGroup;
    protected $role;
    protected $roleid;
    protected $menu = [];

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.:
        // $this->session = \Config\Services::session();
        $this->auth = Services::authentication();
        $this->authorize = Services::authorization();
        $this->db = Database::connect();
        $this->session = service('session');

        $this->userGroup = new UserGroupModel();
        if (user() != null) {
            $this->userGroup = $this->userGroup->getGroupName(user()->id);
        } else {
            header('location:/simanis');
            die('redirect');
        }

        if (!isset($_SESSION['role']) || $_SESSION['role'] == null || !isset($_SESSION['roleid']) || $_SESSION['roleid'] == null) {
            $_SESSION['role'] = $this->userGroup[0]->rolename;
            $_SESSION['roleid'] = $this->userGroup[0]->roleid;
        }
        $this->role = $_SESSION['role'];
        $this->roleid = $_SESSION['roleid'];

        switch ($this->role) {
            case 'Mahasiswa':
                $this->menu = [
                    'Pendaftaran KP' => 'kerjapraktek/daftarKP',
                    'Pilih pembimbing' => 'DosbingController/index',
                    'Proposal KP' => 'dokumen/proposal',
                    'Surat Permohonan KP' => 'dokumen/permohonanKP',
                    'Surat Balasan KP' => 'dokumen/balasanKP',
                    'Pakta Integritas KP' => 'dokumen/pakta_integritas',
                    'Pelaksanaan-KP' => 'kendali/formKendali',
                    'Laporan KP' => 'dokumen/laporanKP',
                    'Presentasi' => 'presentasi/',
                    'Revisi Laporan KP' => 'dokumen/upload_revisi',
                    'Pengumpulan Dokumen' => 'dokumen/pengumpulanDokumen',
                ];
                break;
            case 'Pembimbing Akademik':
                $this->pembimbing = 'Pembimbing Akademik';
                $this->menu = [
                    'Persetujuan Bimbingan KP' => 'DosbingController/bimbingan',
                    'Pembekalan KP' => 'dosbing/pembekalan',
                    'Konsultasi KP' => 'SurveyController/index',
                    'Tanda Tangan BA KP' => 'kerjapraktek/daftarKP',
                    'Rekap Nilai KP' => 'dokumen/permohonanKP',
                ];
                break;
            case 'Penguji':
                $this->menu = [
                    'Review Laporan KP' => 'kerjapraktek/daftarKP',
                ];
                break;
            case 'Administrator':
                $this->menu = [];
                break;
        }
    }
}
