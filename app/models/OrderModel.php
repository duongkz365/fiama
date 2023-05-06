<?php

class OrderModel  extends Model {

    public function TableFill()
    {
    }
    public function FieldFill()
    {
    }

    //order status: pending, delivering, done, cancel, paid: 0 unpaid, 1 paid
    public function GetAllOrder()
    {
        $data = $this->db->Query("SELECT * FROM fiama.orders")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function GetAllOrderByCustomerId($customer_id)
    {
        $data = $this->db->Query("SELECT * FROM fiama.orders WHERE customer_id = " . $customer_id)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function GetAllOrderDetail()
    {
        $data = $this->db->Query("SELECT * FROM fiama.order_detail")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function createOrder($customer_id, $total_value, $totalAmount, $payment_method, $phone, $address)
    {
        $arr = [
            "customer_id" => $customer_id,
            "order_date" => date('Y-m-d'),
            "total_value" => $total_value,
            "total_amount" => $totalAmount,
            "payment_method" => $payment_method,
            "phone" => $phone,
            "address" => $address,
            "status" => "pending",
            "paid" => 0
        ];

        $id = $this->db->InsertButReturnProdId("fiama.orders", $arr);
        
        return $id;
    }

    public function createOrderDetail($order_id, $product_id, $value, $amount)
    {
        $arr = [
            "order_id" => $order_id,
            "product_id" => $product_id,
            "value" => $value,
            "amount" => $amount,
        ];

        $this->db->Insert("fiama.order_detail", $arr);
    }

    public function getAllOrderToShowToAdmin()
    {
        $result = $this->db->Query("SELECT * FROM fiama.orders o
            JOIN fiama.order_detail od ON o.id = od.order_id
            JOIN fiama.product p ON od.product_id = p.Id
            JOIN fiama.customer c ON o.customer_id = c.Id")->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
        die;
        return $result;
    }

    public function GetAllFilterOrder($status, $fromDate, $toDate)
    {
        if ( !isset($status) || $status == "") {
            $data = $this->db->Query("SELECT *
                FROM fiama.orders
                WHERE delivery_date BETWEEN COALESCE('".$fromDate."', '1970-01-01') AND COALESCE('".$toDate."', NOW())")->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $data = $this->db->Query("SELECT *
            FROM fiama.orders
            WHERE status = '". $status ."'
            AND delivery_date BETWEEN COALESCE('".$fromDate."', '1970-01-01') AND COALESCE('".$toDate."', NOW())")->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $data;
    }

    public function total_inport($product_id)
    {
        $result = $this->db->Query("SELECT product.Id, product.Title, 
                COALESCE(SUM(fiama.import_invoice_detail.amount), 0) AS total_import_quantity
            FROM fiama.product 
            JOIN fiama.import_invoice_detail ON import_invoice_detail.product_id = product.Id
            JOIN fiama.import_invoice ON import_invoice.id = import_invoice_detail.import_invoice_id
            WHERE product.Id = " . $product_id)->fetch(PDO::FETCH_ASSOC);
        return $result['total_import_quantity'];
    }

    public function total_order($product_id)
    {
        $result = $this->db->Query("SELECT product.Id, product.Title, 
            COALESCE(SUM(fiama.order_detail.amount), 0) AS total_order_quantity
            FROM fiama.product 
            JOIN fiama.order_detail ON order_detail.product_id = product.Id
            JOIN fiama.orders ON orders.id = order_detail.order_id
            WHERE product.Id =" . $product_id . " AND orders.status != 'canceled'")->fetch(PDO::FETCH_ASSOC);
        return $result['total_order_quantity'];
    }

    public function currentAmountOfAProduct($product_id)
    {
        $result = $this->total_inport($product_id) - $this->total_order($product_id);
        return $result;
    }

    public function total_import_at_a_time($product_id, $date)
    {
        $result = $this->db->Query("SELECT COALESCE(SUM(import_invoice_detail.amount), 0) AS import_qty, product_id
        FROM fiama.import_invoice_detail
        JOIN fiama.import_invoice ON import_invoice.id = import_invoice_detail.import_invoice_id
        WHERE import_invoice.date <= '".$date."' AND product_id = ".$product_id."
        GROUP BY product_id")->fetch(PDO::FETCH_ASSOC);

        if (!$result)
        {
            return 0;
        }
        
        return $result['import_qty'];
    }

    public function total_order_at_a_time($product_id, $date)
    {
        $result = $this->db->Query("SELECT COALESCE(SUM(order_detail.amount), 0) AS order_qty, product_id
        FROM fiama.order_detail
        JOIN fiama.orders ON orders.id = order_detail.order_id
        WHERE orders.order_date <= '".$date."' AND product_id = ".$product_id." AND orders.status != 'canceled'
        GROUP BY product_id")->fetch(PDO::FETCH_ASSOC);

        if (!$result)
        {
            return 0;
        }
        var_dump($result);
        die;
        return $result['order_qty'];
    }

    public function AmountOfAProductAtADate($product_id, $date)
    {
        $result = $this->total_import_at_a_time($product_id, $date) - $this->total_order_at_a_time($product_id, $date);

        return $result;
    }

    public function handleOrderStatus($order_id, $status)
    {
        if ($status == "delivering")
        {
            $arr = [
                "status" => $status,
                "delivery_date" => date('Y-m-d')
            ];
        } else {
            $arr = [
                "status" => $status,
            ];
        }
        

        $data = $this->db->Update("fiama.orders", $arr, "id=" . $order_id);
        return $data;
    }

    public function handlePaidOrder($order_id, $paid)
    {
        $arr = [
            "paid" => $paid
        ];

        $data = $this->db->Update("fiama.orders", $arr, "id=" . $order_id);
        return $data;
    }
}