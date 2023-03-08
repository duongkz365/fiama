<?php
class Home extends Controller {
    public $homeModel;
    private $data = [];
    public function __construct()
    {
        $this->homeModel = $this->CreateModel('HomeModel');
    }
    public function index(){
        $this->data['subData']['pageTitle'] = 'Fiama';
        $this->data['views'] = 'home/index';
        $this->data['subData']['newArrivalItem']   = $this->homeModel->GetNewArrivalItem();
        $this->data['subData']['promotion']        = $this->homeModel->GetPromotion();
        $this->data['subData']['promotionProduct'] = $this->homeModel->GetPromotionProduct();
        $this->data['subData']['topProduct']       = $this->homeModel->GetTopProduct();
        $this->data['subData']['news']             = $this->homeModel->GetNews();

        //data header
        $this->data['header']['category']          = $this->homeModel->GetProductCategory();
        $this->data['header']['subCategory']       = $this->homeModel->GetProductSubCategory();

        //data footer

        $this->data['footer'][] = [];

        $this->RenderView('layouts/clientLayout',$this->data);
    }

}