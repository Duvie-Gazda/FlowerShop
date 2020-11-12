<?php
require_once '../butstrap.php';

class OrderControl
{
    protected $orders = array();

    public function __construct($orders)
    {
        $this->orders[] = $orders;
    }


    public function addNewOrder($id, OrderStatus $status, User $client, User $reciver, $date, $dateSendPlan, $dateSend)
    {
        $orderList = $this->getOrders();
        $newOrder = new Order($id, $status, $client, $reciver, $date, $dateSendPlan, $dateSend);
        array_push($orderList,$newOrder);
        $this->orders = $orderList;
    }

    /**
     * Get the value of orders
     */
    public function getOrders()
    {
        $connection = new Connection();
        $connection.connect();

        return $this->orders;
    }

    /**
     * Set the value of orders
     *
     * @return  self
     */

    public function setOrders($orders)
    {
        $this->orders[] = $orders;

        return $this;
    }
}
