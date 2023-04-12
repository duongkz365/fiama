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

        //insert and update
        function SaveEmployee($postData)
        {
            $_SESSION['error'] = "";
            $arr = [
                "LastName" => $postData['LastName'],
                "FirstName" => $postData['FirstName'],
                "Username" => $postData['UserName'],
                "Password" => $postData['Password'],
                "Position" => $postData['Position'],
                "CreatedDate" => date("d/m/Y"),
                "Status" => 1,
                "Phone" => $postData['Phone'] ? $postData['Phone'] : "",
                "Email" => $postData['Email'] ? $postData['Email'] : "",
            ];

            if (isset($postData['staffId']))    //edit
            {
                $isEmpExist = $this->db->Query("select * from fiama.employee where id=" . $postData['staffId'])->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($isEmpExist))
                {
                    $data = $this->db->Update("fiama.employee", $arr, "Id=" . $postData['staffId'] );
                } else {
                    $_SESSION['error'] = "Employee doesn't exist!";
                    return false;
                }
            } else {    //create
                $data = $this->db->Insert("fiama.employee", $arr);
                if ($data) {
                    return true;
                } else {
                    $_SESSION['error'] = "Save error!";
                    return false;
                }
            }
        }
    }
?>