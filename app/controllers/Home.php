<?php
class Home extends Controller {
    public $homeModel;

    public function __construct()
    {
        $this->homeModel = $this->Model('HomeModel');
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