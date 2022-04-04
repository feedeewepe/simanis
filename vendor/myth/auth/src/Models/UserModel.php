<?php

namespace Myth\Auth\Models;

use CodeIgniter\Model;
use Myth\Auth\Authorization\GroupModel;
use Myth\Auth\Entities\User;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType = User::class;
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    ];

    protected $useTimestamps = true;

    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[users.email,id,{id}]',
        'username' => 'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
        'password_hash' => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    protected $afterInsert = ['addToGroup'];

    /**
     * The id of a group to assign.
     * Set internally by withGroup.
     *
     * @var int
     */
    protected $assignGroup;

    /**
     * Logs a password reset attempt for posterity sake.
     */
    public function logResetAttempt(string $email, string $token = null, string $ipAddress = null, string $userAgent = null)
    {
        $this->db->table('auth_reset_attempts')->insert([
            'email' => $email,
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'token' => $token,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Logs an activation attempt for posterity sake.
     */
    public function logActivationAttempt(string $token = null, string $ipAddress = null, string $userAgent = null)
    {
        $this->db->table('auth_activation_attempts')->insert([
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'token' => $token,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Sets the group to assign any users created.
     *
     * @return $this
     */
    public function withGroup(string $groupName)
    {
        $group = $this->db->table('auth_groups')->where('name', $groupName)->get()->getFirstRow();

        $this->assignGroup = $group->id;

        return $this;
    }

    /**
     * Clears the group to assign to newly created users.
     *
     * @return $this
     */
    public function clearGroup()
    {
        $this->assignGroup = null;

        return $this;
    }

    /**
     * If a default role is assigned in Config\Auth, will
     * add this user to that group. Will do nothing
     * if the group cannot be found.
     *
     * @param $data
     *
     * @return mixed
     */
    protected function addToGroup($data)
    {
        if (is_numeric($this->assignGroup)) {
            $groupModel = model(GroupModel::class);
            $groupModel->addUserToGroup($data['id'], $this->assignGroup);
        }

        return $data;
    }

    public function select_data($id = false)
    {
        if ($id == false) {
            return $this->db->table('users')->get()->getResultObject();
            // return $this->db->table('users')->join('usergroup', 'users.id = usergroup.users_id')->join('role', 'role.roleid = usergroup.role_id')->where('usergroup.role_id <>', '1')->get()->getResultObject();
        }

        return $this->db->table('users')->where('users.id', $id)->get()->getFirstRow();
        // return $this->db->table('users')->join('usergroup', 'users.id = usergroup.users_id')->join('role', 'role.roleid = usergroup.role_id')->where('users.id', $id)->get()->getFirstRow();
    }

    public function getUserWithRoles($id = false)
    {
        if ($id == false) {
            $users = $this->db->table('users')->get()->getResultArray();
        } else {
            $users = $this->db->table('users')->where('users.id', $id)->get()->getResultArray();
        }
        foreach ($users as $key => $user) {
            $role = $this->db->table('role')->join('usergroup', 'usergroup.role_id = role.roleid')->where('usergroup.users_id', $user['id'])->get()->getResultArray();
            $users[$key] = array_merge($users[$key], ['role' => $role]);
        }

        return $users;
    }
}
