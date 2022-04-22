<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'student';
    protected $primaryKey = 'STUDENTID';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = \App\Entities\Student::class;
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['FULLNAME', 'STUDYPROGRAMID', 'GROUPID', 'CLASS', 'LECTURERCODE', 'STUDENTSCHOOLYEAR'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    // func select all status or by groupid
    public function select_data($id = false)
    {
        if ($id == false) {
            return $this->get()->getResultObject();
        }

        return $this->getWhere(['STUDENTID' => $id])->getRow();
    }
}
