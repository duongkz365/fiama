<?php

class Product extends Controller{
    public $productModel;
    public $data = [];
    function __construct()
    {
        $this->productModel = $this->CreateModel('ProductModel');  
    }
    function index(){
        $data = $this->productModel->GetList();

        $this->RenderView('products/list');
    }
    function list(){

        if(!empty($_GET['search'])){
            $this->data['subData']['search'] = $_GET['search'];
            $this->data['subData']['pageTitle'] = 'search';
        }else {
            $this->data['subData']['search'] = '';
            $this->data['subData']['pageTitle'] = 'flowers';
            

        }



        $this->data['subData']['listProduct'] = $this->productModel->GetList();
        $this->data['views'] = 'products/list';


        $this->data['header']['category']          = [];
        $this->data['header']['subCategory']       = [];

        //data footer

        $this->data['footer'][] = [];

        $this->RenderView('layouts/clientLayout',$this->data);
        $this->RenderView('layouts/clientLayout',$this->data);

    }
    function detail(){
        if(!empty($_GET['page'])){
            echo $_GET['page'];
        }
        $data = $this->productModel->GetList();
        $this->data['pageTitle'] = '';
        $this->data['views'] = 'products/detail';
        $this->data['subData']['objProduct'] = [];
        $this->RenderView('layouts/clientLayout',$this->data);

    }
}