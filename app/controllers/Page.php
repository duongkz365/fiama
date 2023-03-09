<?php

class Page extends Controller{

    public $pageModel,$data = [];

    function __construct()
    {
        $this->pageModel = $this->CreateModel('PageModel');

        $this->data['header']['category']          = $this->pageModel->GetProductCategory();
        $this->data['header']['subCategory']       = $this->pageModel->GetProductSubCategory();
    }
    function Index(){
        
    }
    function AboutUs(){
        
    }
    function Portfolio(){

    }
    function PortfolioDetail(){

    }
    function GoogleMapLocation(){

    }
    function Contact(){

    }
    function CommingSoon(){

    }
    function News(){

    }
    function NewDetails(){

    }
}