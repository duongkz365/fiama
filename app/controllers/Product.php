<?php

class Product extends Controller
{
    public $productModel;
    public $data = [];
    function __construct()
    {
        $this->productModel = $this->CreateModel('ProductModel');
        $this->data['header']['category']          = $this->productModel->GetProductCategory();
        $this->data['header']['subCategory']       = $this->productModel->GetProductSubCategory();
        $this->data['slideCart'] = [1, 2, 3];
        //data footer

        $this->data['footer'][] = [];

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
        $this->RenderView('layouts/clientLayout', $this->data);

    }
    function detail($strPath)
    {
        $product =  $this->productModel->GetProduct($strPath)[0];
        $listCategory = $this->productModel->GetCategoryFromStringPathDetail($strPath);
        $this->data['subData']['pageTitle'] = $product['Title'];
        $this->data['views'] = 'products/detail';
        $this->data['subData']['product'] = $product;
        $this->data['subData']['listCategory'] = $listCategory;
        $this->data['subData']['relatedProduct'] = $this->productModel->GetRelatedProduct();
        $this->RenderView('layouts/clientLayout', $this->data);
    }


    function PageCount($arr)
    {
        if (sizeof($arr) % 9 == 0)
            return sizeof($arr) / 9;
        else
            return (int)(sizeof($arr) / 9) + 1;
    }

    function convert_name($str) {
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		$str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
		$str = preg_replace("/( )/", '-', $str);
		return $str;
	}
}
