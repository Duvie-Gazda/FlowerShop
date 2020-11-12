<?php
require_once '../butstrap.php';

class Connection
{

    public $mysqlCon;

    public function connect()
    {
        $mysql =  mysqli_connect(DB_HOSTING, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
        if (mysqli_connect_errno($mysql)) {
            echo "Error connection : " . mysqli_connect_errno($mysql) . " " . mysqli_connect_error($mysql);
        } else {
            $this->mysqlCon = $mysql;
            echo 'Connected';
            return $this->mysqlCon;
        }
    }

    public function disconnect()
    {
        mysqli_close($this->mysqlCon);
        echo 'Disconnected';
    }
}
