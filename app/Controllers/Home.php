<?php

namespace App\Controllers;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\RequestInterface;
helper('General');

class Home extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();

    }
    public function index()
    {
        $data['makes']=getRecords('make', 'id', 'desc',$where=array('is_del'=>1));
        $data['prices']=returnPrices('price',$where=array('is_del'=>1));
        $data['vehicle_types']=getEnumValue('sell','vehicle_type');
        echo  view('home',$data);
    }

    public function getModel()
    {
        if ($this->request->isAJAX()) {
            $makeTitle=$this->request->getVar('id');
            $getMakeID=getByColumn('make','id',$where=array('is_del'=>1,'slug'=>$makeTitle));
            $data=getRecords('model', 'id', 'desc',$where=array('is_del'=>1,'make_id'=>$getMakeID->id));
            echo json_encode($data);

        }

    }





}
