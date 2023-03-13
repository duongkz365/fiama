<?php

class ProductModel  extends Model{

    public function TableFill()
    {
        
    }
    public function FieldFill()
    {
        
    }

    public function GetProductById($idProduct){
        $data = $this->db->Query("SELECT * FROM fiama.product WHERE Id = $idProduct")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function GetProCategory($id){
        $data = $this->db->Query("SELECT * FROM fiama.sub_category WHERE Id = $id")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function GetProductByCategory($categoryId){
        $data = $this->db->Query("SELECT * FROM fiama.sub_category_product left join fiama.product on fiama.product.Id = fiama.sub_category_product.ProductId WHERE fiama.sub_category_product.SubCategoryId = $categoryId")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetListCategory(){
        $data = $this->db->Query("SELECT * FROM fiama.sub_category LIMIT 10")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function GetIdProduct($strPath){
        $data = $this->db->Query("SELECT Id FROM fiama.product WHERE Path = '$strPath'")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetCategoryFromStringPathDetail($strPath){
        $idProduct = $this->db->Query("SELECT Id FROM fiama.product WHERE Path = '$strPath'")->fetchAll(PDO::FETCH_ASSOC)[0]['Id'];
        $data = $this->db->Query("SELECT * FROM fiama.sub_category_product LEFT JOIN fiama.sub_category on sub_category.Id = sub_category_product.SubCategoryId  WHERE sub_category_product.ProductId = $idProduct")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function GetProduct($strPath){
        $data = $this->db->Query("SELECT * FROM fiama.product WHERE Path = '$strPath'")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function GetRelatedProduct(){
        $data = $this->db->Query("SELECT * FROM fiama.product LIMIT 10 ")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}