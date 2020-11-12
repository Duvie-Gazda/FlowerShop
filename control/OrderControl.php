<?php
require_once 'bootstrap.php';

class OrderControl
{

    public function addNewOrder($id, OrderStatus $status, User $client, User $reciver, $date, $dateSendPlan, $dateSend)
    {
        $orderList = $this->getOrders();
        $newOrder = new Order($id, $status, $client, $reciver, $date, $dateSendPlan, $dateSend);
        array_push($orderList, $newOrder);
        $this->orders = $orderList;
    }

    /**
     * Get the value of orders
     */
    public function getOrders()
    {
        $connection = new DBConnection;
        $result = $connection->query("SELECT * FROM `order`;");
        if (is_a($result, 'mysqli_result')) {
            $connection->close();
            return $result;

            // dump result set 
            //dd($result->num_rows, 'var_dump', false);
            //dd($result->fetch_all());

            /* очищаем результирующий набор */
            //$result->close();

        }
        $connection->close();
        return false;
    }
}
