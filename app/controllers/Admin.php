<?php
class Admin extends Controller{

    public $adminModel,$data = [];

    function __construct()
    {
        $this->adminModel = $this->CreateModel('AdminModel');
    }

    function Index(){
        $this->RenderView('layouts/adminLayout',$this->data);
    }
}