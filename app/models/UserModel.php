<?php

class UserModel  extends Model{

    public function TableFill()
    {
        
    }
    public function FieldFill()
    {
        
    }
    public function GetListCustomer(){
        $data = $this->db->Query("SELECT * FROM fiama.customer")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}