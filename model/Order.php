<?php

class Order
{
    protected $id;

    protected OrderStatus $status;

    protected User $client;

    protected User $reciver;

    protected $date;

    protected $dateSendPlan;

    protected $dateSend;

    public function __construct($id, OrderStatus $status, User $client,User $reciver, $date, $dateSendPlan, $dateSend)
    {
        $this->id = $id;
        $this->status = $status;
        $this->client = $client;
        $this->reciver = $reciver;
        $this->date = $date;
        $this->dateSendPlan = $dateSendPlan;
        $this->dateSend = $dateSend;
    }
}
