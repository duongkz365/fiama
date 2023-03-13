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
    }
?>