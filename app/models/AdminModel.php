<?php
    class AdminModel extends Model{
        function TableFill()
        {
            
        }
        function FieldFill()
        {
            
        }

        function GetListProduct(){
            $data = $this->db->Query("SELECT * FROM fiama.product")->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        function GetListEmployee(){
            $data = $this->db->Query("SELECT * FROM fiama.employee")->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        function GetListCategory(){
            $data = $this->db->Query("SELECT * FROM fiama.categories")->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>