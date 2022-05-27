<?php

namespace App\Models;

use CodeIgniter\Model;
helper('General');
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


    public function searchData($make='',$model='',$priceSlug='',$vehicle='',$year='',$sort='',$page)
    {
        $db = \Config\Database::connect();
        $this->select('users.name,sell.price,sell.id,make.title as make_title,model.title as model_title,sell.year,sell.mileage,sell.vehicle_type,sell.regular_price,sell.condition');
        $this->join('make', 'sell.make_id = make.id');
        $this->join('model', 'sell.model_id = model.id');
        $this->join('users', 'users.id = sell.user_id');
        if($make!=''){$this->where('sell.make_id',$make);}
        if($model!=''){$this->where('sell.model_id',$model);}
        if($priceSlug!=''){$this->where('sell.price <=',$priceSlug);}
        if($vehicle!=''){$this->where('sell.vehicle_type',$vehicle);}
        if($year!=''){$this->where('sell.year',$year);}
        $this->where('sell.status','active');
        $sort=isset($sort) && !empty($sort) ? $sort : 'desc';
        switch ($sort) {
            case "old":
                $this->orderBy('sell.id','asc');
                break;
            case "high-price":
                $this->orderBy('sell.price','desc');
                break;
            case "low-price":
                $this->orderBy('sell.price','asc');
                break;
            default:
                $this->orderBy('sell.id','desc');
        }
        $adds=$this->paginate($page);
        $totalAdds=array();
        foreach($adds as $add)
        {
            $add['totalImages']=$this->totalmages($add['id']);
            $totalAdds[]=$add;
        }
        return $totalAdds;

    }

    public function totalmages($addID)
    {
        $query = $this->query("SELECT image_path,count(id) as totalImage FROM sell_images Where sell_id='$addID' GROUP BY sell_id")->getRowArray();
        return $query;
    }



}
