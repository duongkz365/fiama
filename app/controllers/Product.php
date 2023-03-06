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
    function listProduct(){
        $this->data['subData']['pageTitle'] = 'Danh sách sản phẩm';
        $this->data['subData']['listProduct'] = $this->productModel->GetList();
        $this->data['views'] = 'products/list';
        $this->RenderView('layouts/clientLayout',$this->data);

    }
    function detailProduct(){
        $data = $this->productModel->GetList();
        $this->RenderView('products/detail');

    }
}