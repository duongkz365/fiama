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
        $this->data['views']['header'] = 'admin/blocks/header';
        $this->data['views']['leftSideBar'] = 'admin/blocks/leftSideBar';
        $this->data['views']['footer'] = 'admin/blocks/footer';
    }

    function Index()
    {
        $this->data['views']['content'] = 'admin/dashboard';
        $this->data['subData'] = [];
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    function DashBoard()
    {
        $this->Index();
    }


    //Employee

    public function RenderEmployee()
    {
        if (empty($_GET['action'])) {
            // render 404
            App::$app->LoadError();
        } else {
            switch ($_GET['action']) {
                case 'list':
                    $this->ViewListEmployee();
                    break;
                case 'add':
                    $this->ViewAddEmployee();
                    break;
                case 'edit':
                    $this->ViewListEmployee();
                    break;
                case 'profile':
                    $this->ViewProfileEmployee();
                    break;
                default: App::$app->LoadError();
            }
        }
    }

    public function ViewListEmployee(){
        $this->data['views']['content'] = 'admin/employee/list';
        $this->data['subData']['listEmployee'] = $this->adminModel->GetListEmployee();
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    public function ViewAddEmployee(){
        $this->data['views']['content'] = 'admin/employee/add';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    public function ViewEditEmployee($employeeId){
        $this->data['views']['content'] = 'admin/employee/edit';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/adminLayout', $this->data);
    }


    public function ViewProfileEmployee(){

        if(!empty($_GET['id'])){
            $this->data['views']['content'] = 'admin/employee/profile';
            $this->data['subData'][] = [];
            $this->RenderView('layouts/adminLayout', $this->data);
        }else {
            App::$app->LoadError();
        }
    }


    // Customer
    public function RenderCustomer(){
        if (empty($_GET['tab'])) {
            // render 404
        } else {
            switch ($_GET['tab']) {
                case 1:
                    break;
                case 2:
                    break;
                case 3:
                    break;
            }
        }
    }

    public function ViewListCutomer(){

    }
    public function ViewAddCustomer(){

    }

    public function ViewEditCustomer(){
        
    }


    //Products
    function ProductAdd()
    {
        $this->data['views'] = 'admin/products/product_add';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    function ProductDetail()
    {

        $this->RenderView('layouts/adminLayout', $this->data);
    }
    function ProductEdit($idProduct = 0)
    {

        $product = $this->productModel->GetProduct($idProduct);
        $this->data['subData'][] = [];
        $this->data['views'] = 'admin/products/product_edit';
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    function ProductList()
    {
        $this->data['subData']['listProduct'] = $this->adminModel->GetListProduct();
        $this->data['views'] = 'admin/products/product_list';
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    // Users
    // function UserAdd()
    // {
    //     $this->RenderView('layouts/adminLayout');
    // }
    // function UserList()
    // {
    //     $this->data['subData']['listCustomer'] = $this->userModel->GetListCustomer();
    //     $this->data['views'] = 'admin/user/user_list';
    //     $this->RenderView('layouts/adminLayout', $this->data);
    // }
    // function UserProfile()
    // {
    //     $this->RenderView('layouts/adminLayout');
    // }

}
