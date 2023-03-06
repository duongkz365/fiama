<?php
class App {

    private $__controller,$__action,$__params;
    function __construct()
    {
        global $routes;
        if(!empty($routes['default_controller']))
            $this->__controller = $routes['default_controller'];
        $this->__action = 'index';
        $this->__params = [];
        self::HandleUrl();
    }
    
    //Get URL from Browser
    function GetUrl(){
        if(!empty($_SERVER['PATH_INFO']))
            return $_SERVER['PATH_INFO'];
        else
            return '/';
    }


    function HandleUrl(){
        $url = $this->GetUrl();
        $urlArr = array_values(array_filter(explode('/',$url)));

        //Handle __controller
        if(!empty($urlArr[0]))
            $this->__controller = ucfirst($urlArr[0]);
        else 
            $this->__controller = ucfirst($this->__controller);
        

        if(file_exists('./app/controllers/'.$this->__controller.'.php')){
            require_once './app/controllers/'.$this->__controller.'.php';
            
            if(class_exists($this->__controller)){
                $this->__controller = new $this->__controller;
                unset($urlArr[0]);
            }else {
                $this->LoadError('404');
            }
            
        }
        else 
            $this->LoadError('404');

        // Handle __action

        if(!empty($urlArr[1])){
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        // Handle __params
        $this->__params = array_values($urlArr);



        if(method_exists($this->__controller,$this->__action)){
            call_user_func_array([$this->__controller,$this->__action],$this->__params);
        }else {
            $this->LoadError('404');
        }



        
    }

    function LoadError($errorName = '404'){
        if(file_exists('./app/errors/'.$errorName.'.php'))
        require_once './app/errors/'.$errorName.'.php';
    }   

    function TestGitHub(){

    }


}