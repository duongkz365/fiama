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
        $this->data['product_list'] = $this->productModel->GetList();
        $this->data['page_title'] = 'Danh sách sản phẩm';
        $this->RenderView('products/list',$this->data);

    }
    function detailProduct(){
        $data = $this->productModel->GetList();
        $this->RenderView('products/detail');

    }
}