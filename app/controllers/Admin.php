<?php
class Admin extends Controller
{

    private $adminModel, $data = [];
    private $productModel;
    private $userModel;
    private $authModel;

    function __construct()
    {
        $this->adminModel = $this->CreateModel('AdminModel');
        $this->productModel = $this->CreateModel('ProductModel');
        $this->userModel = $this->CreateModel('UserModel');
        $this->authModel = $this->CreateModel("AuthModel");
        $this->data['views']['header'] = 'admin/blocks/header';
        $this->data['views']['leftSideBar'] = 'admin/blocks/leftSideBar';
        $this->data['views']['footer'] = 'admin/blocks/footer';

        if (!$this->authModel->check_logged_in_employee()) {
            $this->authModel->logout();
        }
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

    function SaveEmployee()
    {
        // var_dump($_POST);
        // if ($_POST['ConfirmPassword'] != $_POST['Password']) echo "dcm";
        if (!isset($_POST['FirstName']) || $_POST['FirstName'] == "") {
            echo "<script>alert('FirstName is Required!'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=add" . "';</script>";
        } else if (!isset($_POST['LastName']) || $_POST['LastName'] == "") {
            echo "<script>alert('LastName is Required!'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=add" . "';</script>";
        } else if (!isset($_POST['UserName']) || $_POST['UserName'] == "") {
            echo "<script>alert('UserName is Required!'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=add" . "';</script>";
        } else if (!$this->authModel->check_username($_POST['UserName'])) {
            echo "<script>alert('Username existed!'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=add" . "';</script>";
        } else if (!isset($_POST['Password']) || $_POST['Password'] == "") {
            echo "<script>alert('Password is Required!'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=add" . "';</script>";
        } else if (!isset($_POST['ConfirmPassword']) || $_POST['ConfirmPassword'] == "") {
            echo "<script>alert('ConfirmPassword is Required!'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=add" . "';</script>";
        } else if ($_POST['ConfirmPassword'] != $_POST['Password']) {
            echo "<script>alert('ConfirmPassword does not match!'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=add" . "';</script>";
        } else {
            $result = $this->adminModel->SaveEmployee($_POST);
            if ($result) {
                echo "<script>alert('Save successfully!'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=list" . "';</script>";
                die;
            } else {
                $errMsg = $_SESSION['error'];
                unset($_SESSION['error']);
                echo "<script>alert('" . $errMsg . "'); window.location.href = '" . _WEB_ROOT . "/admin/employee?action=add" . "';</script>";
            }
        }
    }

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
        if (empty($_GET['action'])) {
            // render 404
            App::$app->LoadError();
        } else {
            switch ($_GET['action']) {
                case 'list':
                    $this->ViewListCustomer();
                    break;
                case 'add':
                    $this->ViewAddCustomer();
                    break;
                case 'edit':
                    $this->ViewListCustomer();
                    break;
                case 'profile':
                    $this->ViewProfileCustomer();
                    break;
                default: App::$app->LoadError();
            }
        }
    }

    public function ViewListCustomer(){
        $this->data['views']['content'] = 'admin/customer/list';
        $this->data['subData']['listCustomer'] = $this->userModel->GetListCustomer();
        $this->RenderView('layouts/adminLayout', $this->data);
    }

    public function ViewAddCustomer(){
        $this->data['views']['content'] = 'admin/customer/add';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/adminLayout', $this->data);
    }

    public function ViewProfileCustomer(){
        if(!empty($_GET['id'])){
            $this->data['views']['content'] = 'admin/customer/profile';
            $this->data['subData'][] = [];
            $this->RenderView('layouts/adminLayout', $this->data);
        }else {
            App::$app->LoadError();
        }
    }




    // Categories

    public function RenderCategories(){
        $action = '';
        if(!empty($_GET['action'])) $action = $_GET['action'];

        if($action == 'list'){
            $this->ViewListCategory();
        }else if($action == 'edit' && !empty($_GET['id'])){
            $this->ViewListCategory($_GET['id']);
        }else {
            App::$app->LoadError();
        }
    }


    public function ViewListCategory(){
        $this->data['views']['content'] = 'admin/categories/list';
        $this->data['subData']['listCategory']= $this->adminModel->GetListCategory();
        $this->RenderView('layouts/adminLayout',$this->data);
    }

    public function ViewEditCategory($id){
        $this->data['views']['content'] = 'admin/categories/list';
        $this->data['subData'][]= [];
        $this->RenderView('layouts/adminLayout',$this->data);
    }


    //Products


    public function RenderProduct(){

      
        $action = '';


        if(!empty($_GET['action'])) $action = $_GET['action'];
        

        if($action == 'list'){
            $this->ViewProductList();
        }else if($action == 'add'){
            
            $this->ViewProductAdd();
        }else if($action == 'edit' && !empty($_GET['id'])){
            $this->ViewProductEdit($_GET['id']);
        }else {
            App::$app->LoadError();
        }
        
    }


    function ViewProductAdd()
    {
        $this->data['views']['content'] = 'admin/products/add';
        $this->data['subData'][] = [];
        $this->RenderView('layouts/adminLayout', $this->data);
    }

    function ViewProductEdit($idProduct = 0)
    {
        $product = $this->productModel->GetProduct($idProduct);
        $this->data['subData'][] = [];
        $this->data['views']['content'] = 'admin/products/edit';
        $this->RenderView('layouts/adminLayout', $this->data);
    }

    function ViewProductList(){
        $this->data['subData']['listProduct'] = $this->adminModel->GetListProduct();
        $this->data['views']['content'] = 'admin/products/list';
        $this->RenderView('layouts/adminLayout', $this->data);
    }

    // Order
    public function RenderOrder(){

      
        $action = '';


        if(!empty($_GET['action'])) $action = $_GET['action'];
        

        if($action == 'new-order'){
            $this->ViewNewOrder();
        }else if($action == 'list'){
            $this->ViewAllListOrder();
        }else if($action == 'detail' && !empty($_GET['id'])){
            $this->ViewDetailOrder($_GET['id']);
        }else if ($action == 'invoice' && !empty($_GET['id'])){
            $this->ViewInvoiceOrder($_GET['id']);
        }else {
            App::$app->LoadError();
        }
        
    }

    public function ViewNewOrder(){
        $this->data['subData']=[];
        $this->data['views']['content'] = 'admin/orders/new';
        $this->RenderView('layouts/adminLayout', $this->data);
    }

    public function ViewAllListOrder(){
        $this->data['subData']=[];
        $this->data['views']['content'] = 'admin/orders/list';
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    public function ViewDetailOrder($id){
        $this->data['subData']=[];
        $this->data['views']['content'] = 'admin/orders/detail';
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    public function ViewInvoiceOrder($id){
        $this->data['subData']=[];
        $this->data['views']['content'] = 'admin/orders/invoice';
        $this->RenderView('layouts/adminLayout', $this->data);
    }


    // Review

    public function RenderReview(){

      
        $action = '';


        if(!empty($_GET['action'])) $action = $_GET['action'];
        

        if($action == 'list'){
            $this->ViewReview();
        }else if($action == 'detail'){

        }else {
            App::$app->LoadError();
        }
        
    }
    public function ViewReview(){
        $this->data['subData']=[];
        $this->data['views']['content'] = 'admin/reviews/review';
        $this->RenderView('layouts/adminLayout', $this->data);
    }
    public function ViewReviewDetail(){

    }


    //Brand

}
