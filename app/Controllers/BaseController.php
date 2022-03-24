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

        $this->userGroup = new UserGroupModel();
        if (user() != null) {
            $this->userGroup = $this->userGroup->getGroupName(user()->usergroupid);
        } else {
            header('location:/simanis');
            die('redirect');
        }
        switch ($this->userGroup) {
            case 'Mahasiswa':
                $this->menu = [
                    'Pendaftaran KP' => 'kerjapraktek/daftarKP',
                    'Survey KP' => 'SurveyController/index',
                    'Proposal KP' => 'kerjapraktek/daftarKP',
                    'Surat Permohonan KP' => 'kerjapraktek/daftarKP',
                    'Surat Balasan KP' => 'kerjapraktek/daftarKP',
                    'Pakta Integritas KP' => 'kerjapraktek/daftarKP',
                    'Pelaksanaan-KP' => 'kerjapraktek/daftarKP',
                    'Laporan KP' => 'kerjapraktek/daftarKP',
                    'Revisi Laporan KP' => 'kerjapraktek/daftarKP',
                    'Presentasi' => 'kerjapraktek/daftarKP',
                    'Pengumpulan Dokumen' => 'kerjapraktek/daftarKP',
                ];
                break;
            case 'Administrator':
                $this->menu = [];
                break;
        }
    }
}
