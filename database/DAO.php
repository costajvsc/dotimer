<?php 
require_once('./Connection.php');

class DAO 
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function create() { }
    public function retrieve() { }
    public function update() { }
    public function delete() { }
    public function find() { }
    
    
}

?>