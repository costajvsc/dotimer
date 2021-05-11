<?php 
require_once('Connection.php');

class DAO 
{
    protected $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

}

?>