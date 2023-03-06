<?php
class HomeModel {

    public $table = 'products';
    public function GetList(){
        $data = [
            'Item 1',
            'Item 2',
            'Item 3',
            'Item 4',
            'Item 5'
        ];
        return $data;
    }
}