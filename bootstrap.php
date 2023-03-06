<?php


define('_DIR_ROOT',str_replace('\\','/', __DIR__));

// xử lý biến http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
else 
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']),'',strtolower(_DIR_ROOT));
$web_root = $web_root.$folder;

define('_WEB_ROOT',$web_root);

require_once './configs/routes.php';
require_once './configs/database.php';
require_once './core/Route.php';
require_once './app/App.php';
if(!empty($config['database'])){
    $db_config = array_filter($config['database']);

    if(!empty($db_config)){
        require_once './core/Connection.php';
        require_once './core/Database.php';
        // $conn = new Database();

        // $query =  $conn->Query("SELECT * FROM fiama.color")->fetchAll(PDO::FETCH_ASSOC);
        //  echo '<pre>';
        // print_r($query);
        //  echo '</pre>';
        
    }
}

require_once './core/Model.php';



require_once './core/Controller.php';  // Load base controller