<?php

namespace App\Models;

use CodeIgniter\Model;

class AddModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sell';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function searchData($make='',$model='',$page)
    {
        $db = \Config\Database::connect();
        $this->select();
        $this->join('make', 'sell.make_id = make.id');
        $this->join('model', 'sell.model_id = model.id');
        if($make!=''){
            $this->where('sell.make_id',$make);
        }
        if($model!=''){
            $this->where('sell.model_id',$model);
        }
        $this->where('sell.status','active');
        return $this->paginate($page);
    }



}
