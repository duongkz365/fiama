<?php
class Controller {

    // Model initialization function
    public function Model($modelName){
        if(file_exists('./app/models/'.$modelName.'.php'))
           require_once './app/models/'.$modelName.'.php';
        if(class_exists($modelName)){
            $model = new $modelName();
            return $model; // Return model class
        }
        return false; 
    }
}