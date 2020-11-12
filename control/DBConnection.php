<?php
require_once 'bootstrap.php';

class DBConnection extends mysqli
{
    public function __construct()
    {
        parent::__construct(DB_HOSTING, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
        if ($this->errno > 0) {
            echo "Error connection : " . $this->errno . " " . $this->error;
        } else {
            echo 'Connected';
        }
    }
}
