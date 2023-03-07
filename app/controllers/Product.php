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

        if(!empty($_GET['page'])){
            echo $_GET['page'];
        }
        $this->data['subData']['pageTitle'] = 'Danh sách sản phẩm';
        $this->data['subData']['listProduct'] = $this->productModel->GetList();
        $this->data['views'] = 'products/list';
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