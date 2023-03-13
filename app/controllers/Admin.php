<?php
class Admin extends Controller
{

    private $adminModel, $data = [];
    private $productModel;
    private $userModel;

    function __construct()
    {
        $this->adminModel = $this->CreateModel('AdminModel');
        $this->productModel = $this->CreateModel('ProductModel');
        $this->userModel = $this->CreateModel('UserModel');
    }

    function Index()
    {
        $this->data['views'] = 'admin/dashboard';
        $this->data['subData'] = [];
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    function DashBoard()
    {
        $this->Index();
    }

    //Products
    function ProductAdd()
    {
        $this->data['views'] = 'admin/products/product_add';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/adminLayout',$this->data);
    }
    function ProductDetail()
    {

        $this->RenderView('layouts/adminLayout',$this->data);
    }
    function ProductEdit($idProduct=0)
    {   

        $product = $this->productModel->GetProduct($idProduct);
        $this->data['subData'][] = [];
        $this->data['views'] = 'admin/products/product_edit';
        $this->RenderView('layouts/adminLayout',$this->data);
    }
    function ProductList()
    { 
        $this->data['subData']['listProduct'] = $this->adminModel->GetListProduct();
        $this->data['views'] = 'admin/products/product_list';
        $this->RenderView('layouts/adminLayout',$this->data);
    }
    // Users
    function UserAdd()
    {
        $this->RenderView('layouts/adminLayout');
    }
    function UserList()
    {
        $this->data['subData']['listCustomer'] = $this->userModel->GetListCustomer();
        $this->data['views'] = 'admin/user/user_list';
        $this->RenderView('layouts/adminLayout',$this->data);
    }
    function UserProfile()
    {
        $this->RenderView('layouts/adminLayout');
    }


    function AdminUserAdd(){
        $this->RenderView('layouts/adminLayout');
    }
    function AdminUserEdit()
    {
        $this->RenderView('layouts/adminLayout');
    }
    function AdminUserList()
    {
        $this->RenderView('layouts/adminLayout');
    }
    function AdminUserProfile()
    {
        $this->RenderView('layouts/adminLayout');
    }


    //Reviews
    function Reviews()
    {
        $this->RenderView('layouts/adminLayout');
    }

    // Orders
    function OrderDetail()
    {
        $this->RenderView('layouts/adminLayout');
    }
    function OrderHistory()
    {
        $this->RenderView('layouts/adminLayout');
    }
    function OrderInvoice()
    {
        $this->RenderView('layouts/adminLayout');
    }
    function Order()
    {
        $this->RenderView('layouts/adminLayout');
    }
    // Category
    function MainCategory()
    {
        $this->RenderView('layouts/adminLayout');
    }
    function SubCategory($level)
    {
        $this->RenderView('layouts/adminLayout');
    }
}
