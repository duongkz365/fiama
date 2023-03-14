<?php

class HomeModel extends Model{
    private $_table = 'product';
    
    function TableFill(){
        return 'color';
    }
    function FieldFill()
    {
        return '';
    }
    public function GetList(){

    }
    public function GetNewArrivalItem(){
        $data = $this->db->Query("SELECT * FROM fiama.product ORDER BY Id DESC LIMIT 8")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetTopProduct(){
        $data = $this->db->Query("SELECT * FROM fiama.product WHERE fiama.product.Hot = 1 OR fiama.product.Discount > 10")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetPromotion(){
        $data = [];
        //$data = $this->db->Query("SELECT * FROM fiama.Promotion ORDER BY Id DESC LIMIT 3")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetPromotionProduct(){
        $data = [];
        //$data = $this->db->Query("SELECT * FROM fiama.promotion_product ORDER BY Id DESC LIMIT 2")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetNews(){
        $data = [];
        //$data = $this->db->Query("SELECT * FROM fiama.news")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}