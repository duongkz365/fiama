<?php
class User extends Controller{

    public $userModel,$data = [];
    function __construct()
    {
        $this->userModel = $this->CreateModel('UserModel');
    }
    function Index(){
        $this->MyAccount();
    }
    function MyAccount(){
        $this->data['subData']['pageTitle'] = 'Tài Khoản Của Tôi';
        $this->data['views'] = 'users/myaccount';
        $this->RenderView('layouts/clientLayout',$this->data); 
    }
    function Wishlist(){
        $this->data['subData']['pageTitle'] = 'Sản Phẩm Yêu Thích';
        $this->data['views'] = 'users/wishlist';
        $this->RenderView('layouts/clientLayout',$this->data); 
    }
    function ShoppingCart(){
        $this->data['subData']['pageTitle'] = 'Giỏ Hàng';
        $this->data['views'] = 'users/shoppingcart';
        $this->RenderView('layouts/clientLayout',$this->data); 
    }
    function CheckOut(){
        $this->data['subData']['pageTitle'] = 'Thanh Toán';
        $this->data['views'] = 'users/checkout';
        $this->RenderView('layouts/clientLayout',$this->data); 
    }

    function Login(){
        $this->data['subData']['pageTitle'] = 'Đăng Nhập';
        $this->data['views'] = 'users/login';
        $this->RenderView('layouts/clientLayout',$this->data); 
    }
    function Register(){
        $this->data['subData']['pageTitle'] = 'Đăng Ký';
        $this->data['views'] = 'users/register';
        $this->RenderView('layouts/clientLayout',$this->data); 
    }
}