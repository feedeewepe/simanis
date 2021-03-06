<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'document';
	protected $primaryKey           = 'DOCUMENTID';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['DOCUMENTID', 'GROUPID', 'DOCUMENT', 'DOCUMENTURL', 'INPUTDATE', 'INPUTBY'];

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

	// protected $db;
	// protected $dokumen;

	// public function __construct()
	// {
	// 	$this->db = \config\Database::connect();
	// 	$this->dokumen = $this->db->table('document');
	// }

	// public function getInsertID()
	// {
	// 	$lastID = $this->dokumen->select('DOCUMENTID')->limit(1)->orderBy('DOCUMENTID', 'DESC')->get()->getResultArray();
	// 	return $lastID;
	// }
}
