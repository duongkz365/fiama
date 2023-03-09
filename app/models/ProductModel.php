<?php

class ProductModel  extends Model{

    public function TableFill()
    {
        
    }
    public function FieldFill()
    {
        
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
}