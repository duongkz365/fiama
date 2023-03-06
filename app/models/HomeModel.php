<?php

class HomeModel extends Model{
    private $_table = 'color';
    
    public function GetList(){
        $data = $this->db->Query("SELECT * FROM fiama.$this->_table")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}