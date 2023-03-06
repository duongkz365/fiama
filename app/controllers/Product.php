<?php

class Product extends Controller{
    public $productModel;
    function __construct()
    {
        $this->productModel = $this->Model('ProductModel');  
    }
    function index(){
        echo "<pre>";
        print_r($this->productModel->GetList());
        echo "</pre>";
    }
}