<?php

class Product extends Controller
{
    public $productModel;
    public $data = [];
    function __construct()
    {
        $this->productModel = $this->CreateModel('ProductModel');
    }
    function index()
    {
        $data = $this->productModel->GetList();

        $this->RenderView('products/list');
    }
    function list($idCategory = 0)
    {
        $listProduct = $this->productModel->GetProductByCategory($idCategory);
        $category = $this->productModel->GetProCategory($idCategory);
        $pageCount = $this->PageCount($listProduct);
        $listCategory = $this->productModel->GetListCategory();

        // filter value here: color,price,size,sort

        // filter value end




        $this->data['subData']['category'] = $category;
        $this->data['subData']['pageCount'] = $pageCount;
        $this->data['subData']['listCategory'] = $listCategory;

        if(!empty($_GET['page'])){
            $page = $_GET['page'];
            if(is_numeric($page)){
                if($page > $pageCount){
                    App::$app->LoadError();
                }else {
                    $this->data['subData']['pageActive'] = $page;
                    $this->data['subData']['listProduct'] = ($page == $pageCount) ? array_slice($listProduct,($page - 1)*9,sizeof($listProduct)) : array_slice($listProduct,($page-1)*9,9);
                                      
                    $this->data['subData']['show'] = ($page == $pageCount) ? sizeof($listProduct) - ($page - 1)*9 : 9;
                    $this->data['subData']['subShow'] = sizeof($listProduct);

                }
            }else {
                App::$app->LoadError();
            }
        }else {
            $this->data['subData']['pageActive'] = 1;
            $this->data['subData']['listProduct'] = array_slice($listProduct,0,9);
            $this->data['subData']['show'] = sizeof($listProduct) == 0 ? 0 : 9;
            $this->data['subData']['subShow'] = sizeof($listProduct);
        }


        if (!empty($_GET['search'])) {
            $this->data['subData']['search'] = $_GET['search'];
            $this->data['subData']['pageTitle'] = 'search';
        } else {
            $this->data['subData']['search'] = '';
            $this->data['subData']['pageTitle'] = $this->productModel->GetProCategory($idCategory)[0]['Title'];
        }



        $this->data['views'] = 'products/list';


        $this->data['header']['category']          = $this->productModel->GetProductCategory();
        $this->data['header']['subCategory']       = $this->productModel->GetProductSubCategory();

        //data footer

        $this->data['footer'][] = [];


        
        $this->RenderView('layouts/clientLayout', $this->data);

    }
    function detail()
    {
        if (!empty($_GET['page'])) {
            echo $_GET['page'];
        }
        $data = $this->productModel->GetList();
        $this->data['pageTitle'] = '';
        $this->data['views'] = 'products/detail';
        $this->data['subData']['objProduct'] = [];
        $this->RenderView('layouts/clientLayout', $this->data);
    }

    function PageCount($arr)
    {
        if (sizeof($arr) % 9 == 0)
            return sizeof($arr) / 9;
        else
            return (int)(sizeof($arr) / 9) + 1;
    }
}
