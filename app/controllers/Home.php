<?php
class Home extends Controller {
    public $homeModel;

    public function __construct()
    {
        $this->homeModel = $this->CreateModel('HomeModel');
    }
    public function index(){
        echo "<pre>";
        print_r($this->homeModel->GetList());
        echo "</pre>";
    }
    public function details(){
        echo "details function";
    }
}