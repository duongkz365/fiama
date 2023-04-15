<?php

class Page extends Controller{

    public $pageModel,$data = [];

    function __construct()
    {
        $this->pageModel = $this->CreateModel('PageModel');

        $this->data['header']['category']          = $this->pageModel->GetProductCategory();
        $this->data['header']['subCategory']       = $this->pageModel->GetProductSubCategory();
        $this->data['footer'][] = [];
        $this->data['footer'][] = [];
        $this->data['slideCart'] = [];
    }
    function AboutUs(){
        $this->data['views'] = 'pages/about';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/clientLayout',$this->data);
    }
    function Portfolio(){
        $this->data['views'] = 'pages/portfolio';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/clientLayout',$this->data);

    }
    function PortfolioDetail(){
        $this->data['views'] = 'pages/portfolio-detail';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/clientLayout',$this->data);

    }
    function GoogleMapLocation(){
        $this->data['views'] = 'pages/google-map';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/clientLayout',$this->data);
    }
    function Contact(){
        $this->data['views'] = 'pages/contact';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/clientLayout',$this->data);

    }
    function CommingSoon(){
        $this->data['views'] = 'pages/comming-soon';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/clientLayout',$this->data);
    }
    function News(){
        $this->data['views'] = 'pages/news';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/clientLayout',$this->data);
    }
    function NewDetail(){
        $this->data['views'] = 'pages/new-details';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/clientLayout',$this->data);

    }
}