<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SIMANIS - ITTelkom SBY',
            'usergroup' => $this->userGroup,
            'role' => $this->role,
        ];

        return $this->view_dashboard($this->role);
    }

    public function view_dashboard($role = false)
    {
        $data = [
            'title' => 'Dashboard - '.$role,
            'usergroup' => $this->userGroup,
            'menu' => $this->menu,
            'role' => $this->role,
        ];

        return view('dashboard/index'.str_replace(' ', '_', strtolower($role == 'Administrator' ? '' : '_'.$role)), $data);
    }

    public function changeRole($role)
    {
        foreach ($this->userGroup as $roles) {
            if ($roles->rolename == $role) {
                $_SESSION['role'] = $role;
                $this->role = $_SESSION['role'];
            }
        }
        $redirectURL = session('redirect_url') ?? site_url('/');

        return redirect()->to($redirectURL);
    }
}
