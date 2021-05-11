<?php

class Connection 
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'dotimer';
    private $connection = null;

    public function __construct()
    {
        $this->startConnection();
    }

    private function startConnection()
    {
        $this->connection = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );
    }

    public function getConnection()
    {
        return $this->connection;
    }
}