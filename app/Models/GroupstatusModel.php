<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupstatusModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'groupstatus';
	protected $primaryKey           = 'GROUPSTATUSID';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = \App\Entities\Groupstatus::class;
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['GROUPSTATUSID', 'STATUSID', 'GROUPID', 'INPUTDATE'];

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
}
