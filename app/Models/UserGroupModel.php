<?php

namespace App\Models;

use CodeIgniter\Model;

class UserGroupModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'usergroup';
	protected $primaryKey           = 'usergroupid';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\UserGroup';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	protected $db, $usergroup;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->usergroup = $this->db->table('usergroup'); // tabel employees  
    }

    // func select all data or by id
    public function select_data($id = FALSE)
    {
        if ($id == FALSE) {
            return $this->usergroup->get()->getResultObject();
        }

        return $this->usergroup->getWhere(['usergroupid' => $id])->getRow();
    }

	public function getGroupName($id)
	{
		$data = $this->select_data($id);
		return $data->GROUPNAME;
	}
}
