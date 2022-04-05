<?php

namespace App\Controllers;

use App\Models\RoleModel;
use Models\UserGroupModel;
use Myth\Auth\Config\Auth as AuthConfig;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class Users extends BaseController
{
    protected $userModel;
    protected $roles;
    protected $auth;

    /**
     * @var AuthConfig
     */
    protected $config;

    /**
     * @var Session
     */
    protected $session;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->roles = new RoleModel();
        helper('form');
        $this->session = service('session');

        $this->config = config('Auth');
        $this->auth = service('authentication');
    }

    public function index()
    {
        if (!$this->roleid == 1) {
            return redirect()->back();
        }
        // echo '<pre>';
        // var_dump($this->userModel->getUserWithRoles());
        // echo '</pre>';
        // die;
        $data = [
            'title' => 'User Management',
            'usergroup' => $this->userGroup,
            'all_data' => $this->userModel->getUserWithRoles(), // selecting all data
            'menu' => $this->menu,
            'roles' => $this->roles->where('roleid >', 1)->findAll(),
            'role' => $this->role,
            'roleid' => $this->roleid,
        ];

        return view('Users/index', $data);
    }

    public function addUser()
    {
        if (!$this->roleid == 1) {
            return redirect()->back();
        }

        $data = [
            'title' => 'Add User',
            'usergroup' => $this->userGroup,
            'all_data' => $this->userModel->select_data(), // selecting all data
            'menu' => $this->menu,
            'roles' => $this->roles->where('roleid >', 1)->findAll(),
            'role' => $this->role,
            'roleid' => $this->roleid,
        ];

        return view('Users/addUser', $data);
    }

    public function saveUser($userid = null)
    {
        $users = model(UserModel::class);

        if ($userid == null) {
            // Validate here first, since some things,
            // like the password, can only be validated properly here.
            $rules = [
                'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|strong_password',
                'pass_confirm' => 'required|matches[password]',
                'role' => 'required',
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
            // Save the user
            $allowedPostFields = array_merge(['password'], $this->config->validFields, $this->config->personalFields);
            $user = new User($this->request->getPost($allowedPostFields));
            if (!$users->save($user)) {
                return redirect()->back()->withInput()->with('errors', $users->errors());
            }
            $usergroup = model(UserGroupModel::class);
            $dataUserGroup = [];
            foreach ($role as $sbg) {
                $dataUserGroup[] = ['users_id' => $users->getInsertID(), 'role_id' => $sbg];
            }
            if (!$usergroup->insert_batch($dataUserGroup)) {
                return redirect()->back()->withInput()->with('errors', $usergroup->errors());
            }
        } else {
            // Update the user
            $allowedPostFields = ['password', 'active', 'role'];
            echo '<pre>';
            var_dump($this->request->getPost($allowedPostFields));
            echo '</pre>';
            die;
            $user = new User($this->request->getPost($allowedPostFields));
            if (!$users->update($userid, $user)) {
                return redirect()->back()->withInput()->with('errors', $users->errors());
            }

            $usergroup = model(UserGroupModel::class);
            if (!$usergroup->where('users_id', $users->getInsertID())->delete()) {
                return redirect()->back()->withInput()->with('errors', $usergroup->errors());
            }
            $dataUserGroup = [];
            foreach ($role as $sbg) {
                $dataUserGroup[] = ['users_id' => $users->getInsertID(), 'role_id' => $sbg];
            }
            if (!$usergroup->insert_batch($dataUserGroup)) {
                return redirect()->back()->withInput()->with('errors', $usergroup->errors());
            }
        }

        return redirect()->route('users')->with('message', lang('Auth.registerSuccess'));
    }

    public function deleteUser(int $userid)
    {
        $users = model(UserModel::class);
        try {
            $users->delete($userid, true); //permanent delete using true parameter
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('errors', $e->getMessage());
        }
        session()->setFlashData('success', 'data has been deleted from database.');

        return redirect()->back();
    }
}
