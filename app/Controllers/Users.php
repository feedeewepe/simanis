<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Entities\User;
use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Controllers;
use Myth\Auth\Config\Auth as AuthConfig;

class Users extends BaseController
{
	protected $userModel;
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
        helper('form'); 
		$this->session = service('session');

		$this->config = config('Auth');
		$this->auth = service('authentication');
    }

	public function index()
	{		
		
        
		if(user()==NULL || !user()->usergroupid==1){			
			return redirect()->back();
		}
		$data = [
            'title' => 'User Management',
            'usergroup' => $this->userGroup,
			'all_data' => $this->userModel->select_data(), // selecting all data
        ];

        return view('Users/index', $data);
	}

	public function addUser()
	{
		if(user()==NULL || !user()->usergroupid==1)
		{
			return redirect()->back();
		}

		$data = [
            'title' => 'Add User',
            'usergroup' => $this->userGroup,
			'all_data' => $this->userModel->select_data(), // selecting all data
        ];

		return view('Users/addUser', $data);

	}

	public function saveUser($userid = NULL)
	{
		$users = model(UserModel::class);
		
		
		if($userid==NULL){
			// Validate here first, since some things,
			// like the password, can only be validated properly here.
			$rules = [
				'username'  	=> 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
				'email'			=> 'required|valid_email|is_unique[users.email]',
				'password'	 	=> 'required|strong_password',
				'pass_confirm' 	=> 'required|matches[password]',
				'usergroupid' 	=> 'required|greater_than[1]',
			];
			if (! $this->validate($rules))
			{
				return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
			}
			// Save the user
			$allowedPostFields = array_merge(['password'], $this->config->validFields, $this->config->personalFields);		
			$user = new User($this->request->getPost($allowedPostFields));
			if (!$users->save($user))
			{
				return redirect()->back()->withInput()->with('errors', $users->errors());
			}
		}else{
			// Update the user
			$allowedPostFields = ['password','usergroupid','active'];		
			$user = new User($this->request->getPost($allowedPostFields));
			if (!$users->update($userid,$user))
			{
				return redirect()->back()->withInput()->with('errors', $users->errors());
			}
		}

		return redirect()->route('users')->with('message', lang('Auth.registerSuccess'));
	}

	public function deleteUser(int $userid)
    {
		$users = model(UserModel::class);		
		try{
			$users->delete($userid,true);//permanent delete using true parameter
		}
        catch(\Exception $e)
		{
			return redirect()->back()->withInput()->with('errors', $e->getMessage());
		}
        session()->setFlashData('success', 'data has been deleted from database.');
        return redirect()->back();
    }
}
