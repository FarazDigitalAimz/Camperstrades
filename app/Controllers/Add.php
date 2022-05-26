<?php

namespace App\Controllers;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\RequestInterface;
use App\Controllers\BaseController;
use App\Models\AddModel;
helper('General');
class Add extends BaseController
{
    public function index()
    {
        $data['makeSlug']=$makeSlug=$this->request->getGet('make_id');
        $data['modelSlug']=$modelSlug=$this->request->getGet('model');
        $data['priceSlug']=$priceSlug=$this->request->getGet('price');
        $data['vehicle']=$vehicle=$this->request->getGet('vehicle_type');
        $data['year']=$year=$this->request->getGet('year');

        $model = new AddModel();
        $data['makes']=getRecords('make', 'id', 'desc',$where=array('is_del'=>1));
        $data['selected_make']=$makeID=isset($makeSlug) && !empty($makeSlug) ? getByColumn('make', 'id',$where=array('is_del'=>1,'slug'=>$makeSlug))->id : '';
        $data['allModels']=isset($makeID) && !empty($makeID) ? getRecords('model', 'id', 'desc',$where=array('is_del'=>1,'make_id'=>$makeID)) : '';
        $data['selected_model']=isset($modelSlug) && !empty($modelSlug) ? getByColumn('model', 'id',$where=array('is_del'=>1,'slug'=>$modelSlug,'make_id'=>$makeID))->id : '';
        $data['prices']=returnPrices();
        $data['vehicle_types']=getEnumValue('sell','vehicle_type');
        if($this->request->isAJAX())
        {
            $data['adds']=$model->searchData($makeID,$data['selected_model'],$priceSlug,$vehicle,$year,$page=5);
            $data['pager'] = $model->pager;
            $data['links'] = $data['pager']->links();
            $viewdata['html']=view('adds/ajax/adds_list',$data);
            echo  json_encode($viewdata);
        }else{

            echo  view('adds/adds_listing',$data);
        }

    }
}
