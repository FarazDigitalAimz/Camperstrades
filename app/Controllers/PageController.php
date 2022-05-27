<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\AddModel;
helper('General');
class PageController extends BaseController
{
    public function index($pagename)
    {
        if($this->request->isAJAX())
        {
            switch ($pagename) {

                case "campervan":
                    $data=$this->getVehicleInfo($pagename);
                    $viewdata['html']=view('adds/ajax/adds_list',$data);
                    echo  json_encode($viewdata);
                    break;
                case "caravan":
                    $data=$this->getVehicleInfo($pagename);
                    $viewdata['html']=view('adds/ajax/adds_list',$data);
                    echo  json_encode($viewdata);
                    break;
                case "motorhome":
                    $data=$this->getVehicleInfo($pagename);
                    $viewdata['html']=view('adds/ajax/adds_list',$data);
                    echo  json_encode($viewdata);
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }

        }else{
            switch ($pagename) {
                case "faqs":

                    $data['faqs']= getRecords('faqs','id', 'desc',$where=array('status'=>1));
                    echo view('faqs/list_faq',$data);
                    break;
                case "campervan":
                    $data=$this->fillters($pagename);
                    echo view('vehicles/vehicle_lists',$data);
                    break;
                case "caravan":
                    $data=$this->fillters($pagename);
                    echo view('vehicles/vehicle_lists',$data);
                    break;
                case "motorhome":
                    $data=$this->fillters($pagename);
                    echo view('vehicles/vehicle_lists',$data);
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }
        }

    }

    public function getVehicleInfo($vehicleType)
    {
        $model = new AddModel();
        $data['makeSlug']=$makeSlug=$this->request->getGet('make_id');
        $data['modelSlug']=$modelSlug=$this->request->getGet('model');
        $data['priceSlug']=$priceSlug=$this->request->getGet('price');
        $data['vehicle']=$vehicle=$this->request->getGet('vehicle_type');
        $data['year']=$year=$this->request->getGet('year');
        $data['sort']=$sort=$this->request->getGet('sort');
        $data['selected_make']=$makeID=isset($makeSlug) && !empty($makeSlug) ? getByColumn('make', 'id',$where=array('is_del'=>1,'slug'=>$makeSlug))->id : '';
        $data['allModels']=isset($makeID) && !empty($makeID) ? getRecords('model', 'id', 'desc',$where=array('is_del'=>1,'make_id'=>$makeID)) : '';
        $data['selected_model']=isset($modelSlug) && !empty($modelSlug) ? getByColumn('model', 'id',$where=array('is_del'=>1,'slug'=>$modelSlug,'make_id'=>$makeID))->id : '';
        $data['adds']=$model->searchData($makeID,$data['selected_model'],$priceSlug,$vehicleType,$year,$sort,$page=5);
        $data['pager'] = $model->pager;
        $data['links'] = $data['pager']->links();
        return $data;

    }

    public function fillters($vehicleType)
    {
        $data['makes']=getVehicleMake($vehicleType);
        $data['prices']=returnPrices('price',$where=array('is_del'=>'1','vehicle_type'=>$vehicleType));
        $data['years']=returnPrices('year',$where=array('is_del'=>'1','vehicle_type'=>$vehicleType));
        $data['pageinfo']=getByColumn('pages','*',$where=array('is_del'=>'1','page_name'=>$vehicleType));
        return $data;
    }




}
