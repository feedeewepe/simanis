<?php

namespace App\Models;

use CodeIgniter\Model;

class InternshipGroupModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'internshipgroup';
    protected $primaryKey = 'GROUPID';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = \App\Entities\InternshipGroup::class;
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['GROUPID', 'LECTURERCODE', 'COMPANYID', 'TYPEID', 'SCHOOLYEAR', 'SEMESTER', 'STARTDATE', 'ENDDATE', 'ADVISORNAME', 'ADVISORUNIT', 'ADVISORPOSITION', 'ADVISORPHONE', 'ADVISOREMAIL'];

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
}
